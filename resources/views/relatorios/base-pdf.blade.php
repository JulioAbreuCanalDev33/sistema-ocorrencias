<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Sistema de Ocorrências</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #2563eb;
            padding-bottom: 15px;
        }
        
        .header h1 {
            color: #2563eb;
            margin: 0;
            font-size: 24px;
        }
        
        .header h2 {
            color: #666;
            margin: 5px 0 0 0;
            font-size: 16px;
            font-weight: normal;
        }
        
        .info-box {
            background-color: #f8fafc;
            border: 1px solid #e5e7eb;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        th {
            background-color: #2563eb;
            color: white;
            padding: 10px 8px;
            text-align: left;
            font-weight: bold;
            font-size: 11px;
        }
        
        td {
            padding: 8px;
            border-bottom: 1px solid #e5e7eb;
            font-size: 10px;
        }
        
        tr:nth-child(even) {
            background-color: #f8fafc;
        }
        
        .footer {
            position: fixed;
            bottom: 20px;
            left: 20px;
            right: 20px;
            text-align: center;
            font-size: 10px;
            color: #666;
            border-top: 1px solid #e5e7eb;
            padding-top: 10px;
        }
        
        .page-break {
            page-break-after: always;
        }
        
        .text-center {
            text-align: center;
        }
        
        .text-right {
            text-align: right;
        }
        
        .badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 9px;
            font-weight: bold;
        }
        
        .badge-success {
            background-color: #10b981;
            color: white;
        }
        
        .badge-warning {
            background-color: #f59e0b;
            color: white;
        }
        
        .badge-danger {
            background-color: #ef4444;
            color: white;
        }
        
        .badge-info {
            background-color: #3b82f6;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Sistema de Ocorrências Veiculares</h1>
        <h2>@yield('title')</h2>
    </div>
    
    <div class="info-box">
        <strong>Data de Geração:</strong> {{ date('d/m/Y H:i:s') }}<br>
        <strong>Usuário:</strong> {{ auth()->user()->name }}<br>
        <strong>Tipo de Usuário:</strong> {{ auth()->user()->isAdmin() ? 'Administrador' : 'Usuário Normal' }}
    </div>
    
    @yield('content')
    
    <div class="footer">
        Sistema de Ocorrências Veiculares - Relatório gerado em {{ date('d/m/Y H:i:s') }} - Página <span class="pagenum"></span>
    </div>
</body>
</html>

