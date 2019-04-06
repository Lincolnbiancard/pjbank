<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use vendor\laravel\framework\src\Illuminate\Pagination\UrlWindow;
use App\Services\ApiPjbank;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    //instanciando var private 
    private $product;


    //CONSTRUTOR
    public function __construct(Product $product, ApiPjbank $apiPjbnak){
        $this->product = $product;
        $this->apiPjbank = $apiPjbnak;
    }

    public function index(Request $request)
    {
        $product = $this->product::all();
        return view('products');
    }


    public function formProduct()
    {
        return view('FormProduct');
    }

   
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->product->create($data);
        
        return redirect('formproduct');
    }

    public function show($codigoProduto)
    {
        $product['product'] = DB::table('products')->where('codigoProduto', $codigoProduto)->first();
        return view('FormUpdate', $product);
    }

    public function init() {

        $products = $this->product->all();
        $valorTotal = 0;
        $qtdeEstoque = 0;

        foreach ($products as $p) {
            $qtdeEstoque += $p->qtdeProduto;
            $valorTotal += $p->qtdeProduto *  $p->precoProduto;
        }

        return view('index', [
            'valorTotal' => $valorTotal, 
            'qtdeEstoque' => $qtdeEstoque
            ]);
    }

    public function update($codigoProduto, Request $request)
    {
        $request = $request->all();
        $product = $this->product->find($codigoProduto);
        $product->update($request);

        return redirect('grid');
    }

   
    public function destroy($codigoProduto)
    {
        $product = $this->product->find($codigoProduto);
        $product->delete();
        return redirect('grid');
    }

    public function grid($param = null, Request $request)
    {
        if (is_null($param)) {
            $products = $this->product->paginate(15);
        } else if (strlen($param) == 1 && !is_numeric($param)) {
            $products = $this->product
            ->where('descricaoProduto', 'LIKE', $param . '%')
            ->paginate(15);
        } 

        return view('grid')->with('products', $products);
    }

  

    public function generateBillet(Request $request)
    {
        $products = $this->product->all();
        $valorTotal = 0;

        foreach ($products as $p) {
            $valorTotal += $p->qtdeProduto *  $p->precoProduto;
        }
        
        $headers = [
            "Content-Type: application/json"
        ];
        
        $body = [
            'vencimento' => date('m/d/Y', strtotime($request->vencimento)),
            'valor' => $valorTotal,
            'juros' => $request->juros,
            'multa' => $request->multa,
            'desconto' => $request->desconto,
            'nome_cliente' => $request->nome_cliente,
            'cpf_cliente' => $request->cpf_cliente,
            'endereco_cliente' => $request->endereco_cliente,
            'numero_cliente' => $request->numero_cliente,
            'complemento_cliente' => $request->complemento_cliente,
            'bairro_cliente' => $request->bairro_cliente,
            'cidade_cliente' => $request->cidade_cliente,
            'estado_cliente' => $request->estado_cliente,
            'cep_cliente' => $request->cep_cliente,
            'logo_url' => $request->logo_url,
            'texto' => $request->texto,
            'grupo' => $request->grupo,
        ];

        $response = $this->apiPjbank->generate($headers, $body, 'POST');

        
        return view('teste')->with('response', json_decode($response));
    }

    public function gridPost(Request $request) {
        $products = $this->product
            ->where('descricaoProduto', 'LIKE', '%' . $request->criterio . '%')
            ->orWhere('codigoProduto', $request->criterio)
            ->paginate(15);
        return view('grid', [
            'products' => $products,
            'criterio' => $request->criterio
            ]);
    }

    public function boleto() {
        $products = $this->product->all();
        $valorTotal = 0;

        foreach ($products as $p) {
            $valorTotal += $p->qtdeProduto *  $p->precoProduto;
        }
        return view('boleto')->with('valorTotal', $valorTotal);
    }
}