<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Publicidade;

class controllPublicidade extends Controller
{
    public function insert(Request $request)
    {
        $publicidade = new Publicidade();

        $publicidade->titulo = filter_input(INPUT_POST , 'publicidadeTitulo');
        $publicidade->descricao = filter_input(INPUT_POST , 'publicidadeDescription');
        //$publicidade->estado = "activo";
        $publicidade->foto = "";
        $publicidade->idCliente=filter_input(INPUT_POST , 'publicidadeClient');

        $imagem =  $request->file('publicidadeFoto');

        if ( !empty( $imagem ) ) {
            $nameImagem = $imagem->getClientOriginalName();
            $fileNewName = 'publicidade_'.time().'.'.$imagem->getClientOriginalExtension();
            $destinactionPath = public_path('/backoffice/images/filesPublicidade');
            $imagem->move($destinactionPath,$fileNewName);
            $publicidade->foto = $fileNewName;
        }

        try{
            $result = $publicidade->save();
            return redirect('/admin')->with('success', 'publicidade has been added');
        } catch(Exception $e)
        {
            return redirect('/admin')->with('false', 'publicidade not has been added');
        }

    }

    public function delete(Request $request)
    {
        $idPublicidade = $request->input('idPublicidade');

        $publicidade = Publicidade::find($idPublicidade);
        try{
            $result = $publicidade->delete();
            return response()->json($result);
        } catch(Exception $e)
        {
            return response()->json(false);
        }
    }

    public function upDate(Request $request)
    {

      $currentId = filter_input(INPUT_POST , 'idUpdatePublicidade');

      $publicidade = Publicidade::find($currentId);

      $publicidade->titulo = filter_input(INPUT_POST , 'publicidadeTituloUpdate');
      $publicidade->descricao = filter_input(INPUT_POST , 'publicidadeDescriptionUpdate');
      $publicidade->responsabilidades = filter_input(INPUT_POST , 'publicidadeResponsabilidadeUpdate');
      $publicidade->competencias = filter_input(INPUT_POST , 'publicidadeCompetenciasUpdate');
      $publicidade->estado = "activo";
      $publicidade->foto = "";

      $imagem =  $request['publicidadeFotoUpdate'];
      $imagOld =  filter_input(INPUT_POST , 'currentFotoName');

      if ( empty( $imagem ) ) {
        $publicidade->foto = $imagOld;
      }else{
        $nameImagem = $imagem->getClientOriginalName();
        $fileNeNname = 'publicidade-'.time().'.'.$imagem->getClientOriginalExtension();

        if (!\Storage::exists($nameImagem)){
          $wasSaved = \Storage::disk('local')->put($fileNeNname, \File::get($imagem));
          if ( $wasSaved ) {
            $publicidade->foto = $fileNeNname;

            $wasDelete = \Storage::disk('local')->delete($imagOld);
            //dd($wasDelete);
          }
        }
      }

      try{
        $result = $publicidade->save();
        return redirect('/administrador')->with('success', 'publicidade has been added');
      }catch(Exception $e){
        return redirect('/administrador')->with('false', 'publicidade not has been added');
      }

    }

    public function searchById(Request $request)
    {
        $idPublicidade = $request->input('idPublicidade');
        $publicidade = Publicidade::find($idPublicidade);
        if($publicidade!=null)
        {
            return response()->json($publicidade);
        }else{
            return response()->json(false);
        }
    }

    public function searchAll()
    {
        $publicidades = DB::table('publicidades')
                        ->join('clientes','publicidades.idCliente','=','clientes.id')
                        ->select('publicidades.*','clientes.email')
                        ->get();
        //Publicidade::all();
        if(count($publicidades)>0)
        {
            return response()->json($publicidades);
        }else
        {
            return response()->json(false);
        }
    }

    public function searchByTittle(Request $request)
    {
        $titulo = $request->input('titulo');
        $publicidades = Publicidade::where('titulo','like','%'.$titulo.'%')->orderBy('created_at')->get();
        if(count($publicidades)>0){
            return response()->json($publicidades);
        }else
        {
            return response()->json(false);
        }
    }

    //No testing
    public function searchByData(Request $request){
        $data = $request->input('data');
        $publicidades = Publicidade::where('created_at','like', $data.'%')->orderBy('created_at')->get();
        return response()->json($publicidades);
    }
}
