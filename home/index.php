<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/DrocSid_Logotipo.png" type="image/x-icon">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Drocsid Stock</title>
</head>
<body class="bg-body-color">
    <div class="sidebar-nav">
        <header>
            <div class="drocsid-logo"></div>
        </header>
        <a href="#"> <!-- DIGITE AQUI O CAMINHO PARA NAVEGAR EM TELAS -->
            <img src="assets/dashboard_white_24dp.svg" alt="dashboard icon">
            <span>Dashboard</span>
        </a>
        <a href="#"> <!-- DIGITE AQUI O CAMINHO PARA NAVEGAR EM TELAS -->
            <img src="assets/inventory_white_24dp.svg" alt="inventory icon">
            <span>Inventário</span>
        </a>
        <a href="#"> <!-- DIGITE AQUI O CAMINHO PARA NAVEGAR EM TELAS -->
            <img src="assets/groups_white_24dp.svg" alt="users icon">
            <span>Usuários</span>
        </a>
        <a href="#"> <!-- DIGITE AQUI O CAMINHO PARA NAVEGAR EM TELAS -->
            <img src="assets/query_stats_white_24dp.svg" alt="report icon">
            <span>Relatório</span>
        </a>
        <a href="#"> <!-- DIGITE AQUI O CAMINHO PARA NAVEGAR EM TELAS -->
            <img src="assets/settings_white_24dp.svg" alt="settings icon">
            <span>Configuração</span>
        </a>
        <a href="#" id="logout-btn" class="logout"> <!-- DIGITE AQUI O CAMINHO PARA NAVEGAR EM TELAS -->
            <img src="assets/logout_white_24dp.svg" alt="logout icon">
            <span>Sair</span>
        </a>
    </div>
    <div id="logout-modal" class="modal">
        <img src="assets/close_white_24dp.svg" alt="close button" class="close-modal-btn" title="Fechar">
        <div class="modal-content">
                <h1>Sair</h1>
                <p>Tem certeza que deseja sair da sua conta?</p>
                <div class="logout-options">
                    <button id="logout-cancel">Cancelar</button>
                    <button id="logout-confirm">Confirmar</button>
                </div>
        </div>
    </div>
    <script type="text/javascript" src="logout-function.js"></script>
</body>
</html>