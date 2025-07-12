<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Agente;
use App\Models\Atendimento;
use App\Models\OcorrenciaVeicular;
use App\Models\VigilanciaVeicular;
use App\Models\TabelaPrestador;
use App\Exports\ClientesExport;
use App\Exports\AgentesExport;
use App\Exports\AtendimentosExport;
use App\Exports\OcorrenciasExport;
use App\Exports\VigilanciaExport;
use App\Exports\PrestadoresExport;
use Maatwebsite\Excel\Facades\Excel;
use Dompdf\Dompdf;
use Dompdf\Options;

class RelatorioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('relatorios.index');
    }

    // Exportação de Clientes
    public function exportarClientesPDF()
    {
        $clientes = Cliente::all();
        
        $html = view('relatorios.clientes-pdf', compact('clientes'))->render();
        
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        return $dompdf->stream('relatorio-clientes-' . date('Y-m-d') . '.pdf');
    }

    public function exportarClientesExcel()
    {
        return Excel::download(new ClientesExport, 'relatorio-clientes-' . date('Y-m-d') . '.xlsx');
    }

    // Exportação de Agentes
    public function exportarAgentesPDF()
    {
        $agentes = Agente::all();
        
        $html = view('relatorios.agentes-pdf', compact('agentes'))->render();
        
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isHtml5ParserEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        return $dompdf->stream('relatorio-agentes-' . date('Y-m-d') . '.pdf');
    }

    public function exportarAgentesExcel()
    {
        return Excel::download(new AgentesExport, 'relatorio-agentes-' . date('Y-m-d') . '.xlsx');
    }

    // Exportação de Atendimentos
    public function exportarAtendimentosPDF()
    {
        $atendimentos = Atendimento::with(['cliente', 'agente'])->get();
        
        $html = view('relatorios.atendimentos-pdf', compact('atendimentos'))->render();
        
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isHtml5ParserEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        
        return $dompdf->stream('relatorio-atendimentos-' . date('Y-m-d') . '.pdf');
    }

    public function exportarAtendimentosExcel()
    {
        return Excel::download(new AtendimentosExport, 'relatorio-atendimentos-' . date('Y-m-d') . '.xlsx');
    }

    // Exportação de Ocorrências Veiculares
    public function exportarOcorrenciasPDF()
    {
        $ocorrencias = OcorrenciaVeicular::all();
        
        $html = view('relatorios.ocorrencias-pdf', compact('ocorrencias'))->render();
        
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isHtml5ParserEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        
        return $dompdf->stream('relatorio-ocorrencias-' . date('Y-m-d') . '.pdf');
    }

    public function exportarOcorrenciasExcel()
    {
        return Excel::download(new OcorrenciasExport, 'relatorio-ocorrencias-' . date('Y-m-d') . '.xlsx');
    }

    // Exportação de Vigilância Veicular
    public function exportarVigilanciaPDF()
    {
        $vigilancias = VigilanciaVeicular::all();
        
        $html = view('relatorios.vigilancia-pdf', compact('vigilancias'))->render();
        
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isHtml5ParserEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        
        return $dompdf->stream('relatorio-vigilancia-' . date('Y-m-d') . '.pdf');
    }

    public function exportarVigilanciaExcel()
    {
        return Excel::download(new VigilanciaExport, 'relatorio-vigilancia-' . date('Y-m-d') . '.xlsx');
    }

    // Exportação de Prestadores (apenas admin)
    public function exportarPrestadoresPDF()
    {
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Acesso negado.');
        }

        $prestadores = TabelaPrestador::all();
        
        $html = view('relatorios.prestadores-pdf', compact('prestadores'))->render();
        
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isHtml5ParserEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        
        return $dompdf->stream('relatorio-prestadores-' . date('Y-m-d') . '.pdf');
    }

    public function exportarPrestadoresExcel()
    {
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Acesso negado.');
        }

        return Excel::download(new PrestadoresExport, 'relatorio-prestadores-' . date('Y-m-d') . '.xlsx');
    }
}

