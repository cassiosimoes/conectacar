<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cadastro Veiculo</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="CodedThemes">
    <meta name="keywords"
    content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="lightbox-form.css">
    <script src="lightbox-form.js" type="text/javascript"></script>
<script type="text/javascript">
	
function abrirfoto(id){
    
	openbox("Enviar nova Foto" ,0,id);

}
</script>
</head>

<body>
<div id="shadowing"></div>
<div id="box" align="center">
 <form>
 <div class="card">
                                                  
                                                        <form >
                                                           
                                                           
                                                        <div class="card">
                                                        <div class="card-header">
                                                            <div class="form-group row">
                                                                <label class="col-form-label">Selecionar</label>
                                                                <div class="col-sm-4">
                                                                    <input type="file" class="form-control" name="foto" value="          ">
                                                                </div>
                                                                
                                                            </div>
                                                            
			<input type="hidden" name="idfoto" id="idfoto" value="">
            <div class="form-group row">
            <div class="col-sm-3"> 
		<input type="button" onClick="closebox()" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="enviar" value="Enviar">
            </div>
           
            
            <div class="col-sm-3">
      <input type="button" name="cancel" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Cancel" onClick="closebox()">
            </div>   </div>
                                                        </div></div>
    </form>
                                                    </div>
 
</div>


    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="login.html">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        
                        
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <div class="user-details">
                                        <span>Cassio Simões</span>
                                    </div>
                                </div>

                                
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Menu Principal</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.html">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Sair</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                                
                            </ul>
                      </div>
                      </nav>      
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-file-code bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>Cadastrar Novo Veiculo</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Dados do Veiculo</h5><br>
                                                        <form name="veiculo" action="dashboard2.php">
                                                            <div class="card">
                                                            <div class="card-header">
                                                            <div class="form-group row">
                                                                <label class="col-form-label">Marca</label>
                                                                <div class="col-sm-2">
                                                                    <select name="select" class="form-control">
                                                                        <option value="7">Selecione</option>
                                                                        <option value="7">ALFA ROMEO</option>
                                                                        <option value="22">ALPINA</option>
                                                                        <option value="35">ASIA</option>
                                                                        <option value="23">AUDI</option>
                                                                        <option value="14">BMW</option>
                                                                        <option value="4">CHRYSLER</option>
                                                                        <option value="19">CITROEN</option>
                                                                        <option value="12">DAEWOO</option>
                                                                        <option value="13">DAIHATSU</option>
                                                                        <option value="5">FIAT</option>
                                                                        <option value="3">FORD</option>
                                                                        <option value="2">GM</option>
                                                                        <option value="21">GURGEL</option>
                                                                        <option value="25">HONDA</option>
                                                                        <option value="31">HYUNDAI</option>
                                                                        <option value="26">JTA/SUZUKI</option>
                                                                        <option value="10">KAWASAKI</option>
                                                                        <option value="33">KIA</option>
                                                                        <option value="30">LADA</option>
                                                                        <option value="29">LAND ROVER</option>
                                                                        <option value="36">MAQ/IMP AGRICOLAS</option>
                                                                        <option value="32">MAZDA</option>
                                                                        <option value="6">MERCEDES-BENZ</option>
                                                                        <option value="27">MITSUBISHI</option>
                                                                        <option value="24">NISSAN</option>
                                                                        <option value="20">PEUGEOT</option>
                                                                        <option value="16">PORSCHE</option>
                                                                        <option value="37">REBOQUES</option>
                                                                        <option value="17">RENAULT</option>
                                                                        <option value="11">SCANIA</option>
                                                                        <option value="28">SUBARU</option>
                                                                        <option value="34">SUNDOWN</option>
                                                                        <option value="15">TOYOTA</option>
                                                                        <option value="1">VOLKSWAGEN</option>
                                                                        <option value="18">VOLVO</option>
                                                                        <option value="9">YAMAHA</option>
                                                                    </select>
                                                                </div>

                                                                <label class="col-form-label">Modelo</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label">Combustível</label>
                                                                <div class="col-sm-2">
                                                                    <select name="select" class="form-control">
                                                                        <option value="1">Selecione</option>
                                                                        <option value="2">GASOLINA</option>
                                                                        <option value="3">ALCOOL</option>
                                                                        <option value="4">DIESEL</option>
                                                                        <option value="5">GNV</option>
                                                                        <option value="6">FLEX</option>
                                                                    </select>
                                                                </div>
                                                                <label class="col-form-label">Placa</label>
                                                                <div class="col-sm-1">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <label class="col-form-label">Renavam</label>
                                                                <div class="col-sm-1">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <label class="col-form-label">Portas</label>
                                                                <div class="col-sm-1">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>


                                                            <div class="form-group row">
                                                                <label class="col-form-label">Cor</label>
                                                                <div class="col-sm-2">
                                                                    <select name="select" class="form-control">
                                                                        <option value="0">Selecione</option>
                                                                        <option value="1">AMARELO</option>
                                                                        <option value="2">AZUL</option>
                                                                        <option value="3">BEGE</option>
                                                                        <option value="4">BRANCA</option>
                                                                        <option value="5">CINZA</option>
                                                                        <option value="6">DOURADA</option>
                                                                        <option value="7">GRENÁ</option>
                                                                        <option value="8">LARANJA</option>
                                                                        <option value="9">MARROM</option>
                                                                        <option value="10">PRATA</option>
                                                                        <option value="11">PRETA</option>
                                                                        <option value="12">ROSA</option>
                                                                        <option value="13">ROXA</option>
                                                                        <option value="14">VERDE</option>
                                                                        <option value="15">VERMELHA</option>
                                                                        <option value="16">FANTASIA</option>                                                                                                          
                                                                        
                                                                    </select>
                                                                </div>
                                                                <label class="col-form-label">Estado</label>
                                                                <div class="col-sm-2">
                                                                    <select name="select" class="form-control">
                                                                        <option value="0">Selecione</option>
                                                                        <option value="AC">Acre</option>
                                                                        <option value="AL">Alagoas</option>
                                                                        <option value="AP">Amapá</option>
                                                                        <option value="AM">Amazonas</option>
                                                                        <option value="BA">Bahia</option>
                                                                        <option value="CE">Ceará</option>
                                                                        <option value="DF">Distrito Federal</option>
                                                                        <option value="ES">Espírito Santo</option>
                                                                        <option value="GO">Goiás</option>
                                                                        <option value="MA">Maranhão</option>
                                                                        <option value="MT">Mato Grosso</option>
                                                                        <option value="MS">Mato Grosso do Sul</option>
                                                                        <option value="MG">Minas Gerais</option>
                                                                        <option value="PA">Pará</option>
                                                                        <option value="PB">Paraíba</option>
                                                                        <option value="PR">Paraná</option>
                                                                        <option value="PE">Pernambuco</option>
                                                                        <option value="PI">Piauí</option>
                                                                        <option value="RJ">Rio de Janeiro</option>
                                                                        <option value="RN">Rio Grande do Norte</option>
                                                                        <option value="RS">Rio Grande do Sul</option>
                                                                        <option value="RO">Rondônia</option>
                                                                        <option value="RR">Roraima</option>
                                                                        <option value="SC">Santa Catarina</option>
                                                                        <option value="SP">São Paulo</option>
                                                                        <option value="SE">Sergipe</option>
                                                                        <option value="TO">Tocantins</option>
                                                                        <option value="EX">Estrangeiro</option>                                                                                                        
                                                                        
                                                                    </select>
                                                                </div> 
                                                                <label class="col-form-label">Município</label>
                                                                <div class="col-sm-2">
                                                                    <select name="select" class="form-control">
                                                                        <option value="0">Selecione</option>
                                                                        <option value="1">Adamantina</option>
                                                                        <option value="2">Adolfo</option>
                                                                        <option value="3">Aguaí</option>
                                                                        <option value="4">Águas da Prata</option>
                                                                        <option value="5">Águas de Lindóia</option>
                                                                        <option value="6">Águas de Santa Bárbara</option>
                                                                        <option value="7">Águas de São Pedro</option>
                                                                        <option value="8">Agudos</option>
                                                                        <option value="9">Alambari</option>
                                                                        <option value="10">Alfredo Marcondes</option>
                                                                        <option value="11">Altair</option>
                                                                        <option value="12">Altinópolis</option>
                                                                        <option value="13">Alto Alegre</option>
                                                                        <option value="14">Alumínio</option>
                                                                        <option value="15">Álvares Florence</option>
                                                                        <option value="16">Álvares Machado</option>
                                                                        <option value="17">Álvaro de Carvalho</option>
                                                                        <option value="18">Alvinlândia</option>
                                                                        <option value="19">Americana</option>
                                                                        <option value="20">Américo Brasiliense</option>
                                                                        <option value="21">Américo de Campos</option>
                                                                        <option value="22">Amparo</option>
                                                                        <option value="23">Analândia</option>
                                                                        <option value="24">Andradina</option>
                                                                        <option value="25">Angatuba</option>
                                                                        <option value="26">Anhembi</option>
                                                                        <option value="27">Anhumas</option>
                                                                        <option value="28">Aparecida</option>
                                                                        <option value="29">Aparecida D´oeste</option>
                                                                        <option value="30">Apiaí</option>
                                                                        <option value="31">Araçariguama</option>
                                                                        <option value="32">Araçatuba</option>
                                                                        <option value="33">Araçoiaba da Serra</option>
                                                                        <option value="34">Aramina</option>
                                                                        <option value="35">Arandu</option>
                                                                        <option value="36">Arapeí</option>
                                                                        <option value="37">Araraquara</option>
                                                                        <option value="38">Araras</option>
                                                                        <option value="39">Arco-íris</option>
                                                                        <option value="40">Arealva</option>
                                                                        <option value="41">Areias</option>
                                                                        <option value="42">Areiópolis</option>
                                                                        <option value="43">Ariranha</option>
                                                                        <option value="44">Artur Nogueira</option>
                                                                        <option value="45">Arujá</option>
                                                                        <option value="46">Aspásia</option>
                                                                        <option value="47">Assis</option>
                                                                        <option value="48">Atibaia</option>
                                                                        <option value="49">Auriflama</option>
                                                                        <option value="50">Avaí</option>
                                                                        <option value="51">Avanhandava</option>
                                                                        <option value="52">Avaré</option>
                                                                        <option value="53">Bady Bassitt</option>
                                                                        <option value="54">Balbinos</option>
                                                                        <option value="55">Bálsamo</option>
                                                                        <option value="56">Bananal</option>
                                                                        <option value="57">Barão de Antonina</option>
                                                                        <option value="58">Barbosa</option>
                                                                        <option value="59">Bariri</option>
                                                                        <option value="60">Barra Bonita</option>
                                                                        <option value="61">Barra do Chapéu</option>
                                                                        <option value="62">Barra do Turvo</option>
                                                                        <option value="63">Barretos</option>
                                                                        <option value="64">Barrinha</option>
                                                                        <option value="65">Barueri</option>
                                                                        <option value="66">Bastos</option>
                                                                        <option value="67">Batatais</option>
                                                                        <option value="68">Bauru</option>
                                                                        <option value="69">Bebedouro</option>
                                                                        <option value="70">Bento de Abreu</option>
                                                                        <option value="71">Bernardino de Campos</option>
                                                                        <option value="72">Bertioga</option>
                                                                        <option value="73">Bilac</option>
                                                                        <option value="74">Birigui</option>
                                                                        <option value="75">Biritiba-mirim</option>
                                                                        <option value="76">Boa Esperança do Sul</option>
                                                                        <option value="77">Bocaina</option>
                                                                        <option value="78">Bofete</option>
                                                                        <option value="79">Boituva</option>
                                                                        <option value="80">Bom Jesus Dos Perdões</option>
                                                                        <option value="81">Bom Sucesso de Itararé</option>
                                                                        <option value="82">Borá</option>
                                                                        <option value="83">Boracéia</option>
                                                                        <option value="84">Borborema</option>
                                                                        <option value="85">Borebi</option>
                                                                        <option value="86">Botucatu</option>
                                                                        <option value="87">Bragança Paulista</option>
                                                                        <option value="88">Braúna</option>
                                                                        <option value="89">Brejo Alegre</option>
                                                                        <option value="90">Brodowski</option>
                                                                        <option value="91">Brotas</option>
                                                                        <option value="92">Buri</option>
                                                                        <option value="93">Buritama</option>
                                                                        <option value="94">Buritizal</option>
                                                                        <option value="95">Cabrália Paulista</option>
                                                                        <option value="96">Cabreúva</option>
                                                                        <option value="97">Caçapava</option>
                                                                        <option value="98">Cachoeira Paulista</option>
                                                                        <option value="99">Caconde</option>
                                                                        <option value="100">Cafelândia</option>
                                                                        <option value="101">Caiabu</option>
                                                                        <option value="102">Caieiras</option>
                                                                        <option value="103">Caiuá</option>
                                                                        <option value="104">Cajamar</option>
                                                                        <option value="105">Cajati</option>
                                                                        <option value="106">Cajobi</option>
                                                                        <option value="107">Cajuru</option>
                                                                        <option value="108">Campina do Monte Alegre</option>
                                                                        <option value="109">Campinas</option>
                                                                        <option value="110">Campo Limpo Paulista</option>
                                                                        <option value="111">Campos do Jordão</option>
                                                                        <option value="112">Campos Novos Paulista</option>
                                                                        <option value="113">Cananéia</option>
                                                                        <option value="114">Canas</option>
                                                                        <option value="115">Cândido Mota</option>
                                                                        <option value="116">Cândido Rodrigues</option>
                                                                        <option value="117">Canitar</option>
                                                                        <option value="118">Capão Bonito</option>
                                                                        <option value="119">Capela do Alto</option>
                                                                        <option value="120">Capivari</option>
                                                                        <option value="121">Caraguatatuba</option>
                                                                        <option value="122">Carapicuíba</option>
                                                                        <option value="123">Cardoso</option>
                                                                        <option value="124">Casa Branca</option>
                                                                        <option value="125">Cássia Dos Coqueiros</option>
                                                                        <option value="126">Castilho</option>
                                                                        <option value="127">Catanduva</option>
                                                                        <option value="128">Catiguá</option>
                                                                        <option value="129">Cedral</option>
                                                                        <option value="130">Cerqueira César</option>
                                                                        <option value="131">Cerquilho</option>
                                                                        <option value="132">Cesário Lange</option>
                                                                        <option value="133">Charqueada</option>
                                                                        <option value="134">Clementina</option>
                                                                        <option value="135">Colina</option>
                                                                        <option value="136">Colômbia</option>
                                                                        <option value="137">Conchal</option>
                                                                        <option value="138">Conchas</option>
                                                                        <option value="139">Cordeirópolis</option>
                                                                        <option value="140">Coroados</option>
                                                                        <option value="141">Coronel Macedo</option>
                                                                        <option value="142">Corumbataí</option>
                                                                        <option value="143">Cosmópolis</option>
                                                                        <option value="144">Cosmorama</option>
                                                                        <option value="145">Cotia</option>
                                                                        <option value="146">Cravinhos</option>
                                                                        <option value="147">Cristais Paulista</option>
                                                                        <option value="148">Cruzália</option>
                                                                        <option value="149">Cruzeiro</option>
                                                                        <option value="150">Cubatão</option>
                                                                        <option value="151">Cunha</option>
                                                                        <option value="152">Descalvado</option>
                                                                        <option value="153">Diadema</option>
                                                                        <option value="154">Dirce Reis</option>
                                                                        <option value="155">Divinolândia</option>
                                                                        <option value="156">Dobrada</option>
                                                                        <option value="157">Dois Córregos</option>
                                                                        <option value="158">Dolcinópolis</option>
                                                                        <option value="159">Dourado</option>
                                                                        <option value="160">Dracena</option>
                                                                        <option value="161">Duartina</option>
                                                                        <option value="162">Dumont</option>
                                                                        <option value="163">Echaporã</option>
                                                                        <option value="164">Eldorado</option>
                                                                        <option value="165">Elias Fausto</option>
                                                                        <option value="166">Elisiário</option>
                                                                        <option value="167">Embaúba</option>
                                                                        <option value="168">Embu</option>
                                                                        <option value="169">Embu-guaçu</option>
                                                                        <option value="170">Emilianópolis</option>
                                                                        <option value="171">Engenheiro Coelho</option>
                                                                        <option value="172">Espírito Santo do Pinhal</option>
                                                                        <option value="173">Espírito Santo do Turvo</option>
                                                                        <option value="174">Estrela D´oeste</option>
                                                                        <option value="175">Estrela do Norte</option>
                                                                        <option value="176">Euclides da Cunha Paulista</option>
                                                                        <option value="177">Fartura</option>
                                                                        <option value="178">Fernandópolis</option>
                                                                        <option value="179">Fernando Prestes</option>
                                                                        <option value="180">Fernão</option>
                                                                        <option value="181">Ferraz de Vasconcelos</option>
                                                                        <option value="182">Flora Rica</option>
                                                                        <option value="183">Floreal</option>
                                                                        <option value="184">Flórida Paulista</option>
                                                                        <option value="185">Florínia</option>
                                                                        <option value="186">Franca</option>
                                                                        <option value="187">Francisco Morato</option>
                                                                        <option value="188">Franco da Rocha</option>
                                                                        <option value="189">Gabriel Monteiro</option>
                                                                        <option value="190">Gália</option>
                                                                        <option value="191">Garça</option>
                                                                        <option value="192">Gastão Vidigal</option>
                                                                        <option value="193">Gavião Peixoto</option>
                                                                        <option value="194">General Salgado</option>
                                                                        <option value="195">Getulina</option>
                                                                        <option value="196">Glicério</option>
                                                                        <option value="197">Guaiçara</option>
                                                                        <option value="198">Guaimbê</option>
                                                                        <option value="199">Guaíra</option>
                                                                        <option value="200">Guapiaçu</option>
                                                                        <option value="201">Guapiara</option>
                                                                        <option value="202">Guará</option>
                                                                        <option value="203">Guaraçaí</option>
                                                                        <option value="204">Guaraci</option>
                                                                        <option value="205">Guarani D´oeste</option>
                                                                        <option value="206">Guarantã</option>
                                                                        <option value="207">Guararapes</option>
                                                                        <option value="208">Guararema</option>
                                                                        <option value="209">Guaratinguetá</option>
                                                                        <option value="210">Guareí</option>
                                                                        <option value="211">Guariba</option>
                                                                        <option value="212">Guarujá</option>
                                                                        <option value="213">Guarulhos</option>
                                                                        <option value="214">Guatapará</option>
                                                                        <option value="215">Guzolândia</option>
                                                                        <option value="216">Herculândia</option>
                                                                        <option value="217">Holambra</option>
                                                                        <option value="218">Hortolândia</option>
                                                                        <option value="219">Iacanga</option>
                                                                        <option value="220">Iacri</option>
                                                                        <option value="221">Iaras</option>
                                                                        <option value="222">Ibaté</option>
                                                                        <option value="223">Ibirá</option>
                                                                        <option value="224">Ibirarema</option>
                                                                        <option value="225">Ibitinga</option>
                                                                        <option value="226">Ibiúna</option>
                                                                        <option value="227">Icém</option>
                                                                        <option value="228">Iepê</option>
                                                                        <option value="229">Igaraçu do Tietê</option>
                                                                        <option value="230">Igarapava</option>
                                                                        <option value="231">Igaratá</option>
                                                                        <option value="232">Iguape</option>
                                                                        <option value="233">Ilhabela</option>
                                                                        <option value="234">Ilha Comprida</option>
                                                                        <option value="235">Ilha Solteira</option>
                                                                        <option value="236">Indaiatuba</option>
                                                                        <option value="237">Indiana</option>
                                                                        <option value="238">Indiaporã</option>
                                                                        <option value="239">Inúbia Paulista</option>
                                                                        <option value="240">Ipaussu</option>
                                                                        <option value="241">Iperó</option>
                                                                        <option value="242">Ipeúna</option>
                                                                        <option value="243">Ipiguá</option>
                                                                        <option value="244">Iporanga</option>
                                                                        <option value="245">Ipuã</option>
                                                                        <option value="246">Iracemápolis</option>
                                                                        <option value="247">Irapuã</option>
                                                                        <option value="248">Irapuru</option>
                                                                        <option value="249">Itaberá</option>
                                                                        <option value="250">Itaí</option>
                                                                        <option value="251">Itajobi</option>
                                                                        <option value="252">Itaju</option>
                                                                        <option value="253">Itanhaém</option>
                                                                        <option value="254">Itaóca</option>
                                                                        <option value="255">Itapecerica da Serra</option>
                                                                        <option value="256">Itapetininga</option>
                                                                        <option value="257">Itapeva</option>
                                                                        <option value="258">Itapevi</option>
                                                                        <option value="259">Itapira</option>
                                                                        <option value="260">Itapirapuã Paulista</option>
                                                                        <option value="261">Itápolis</option>
                                                                        <option value="262">Itaporanga</option>
                                                                        <option value="263">Itapuí</option>
                                                                        <option value="264">Itapura</option>
                                                                        <option value="265">Itaquaquecetuba</option>
                                                                        <option value="266">Itararé</option>
                                                                        <option value="267">Itariri</option>
                                                                        <option value="268">Itatiba</option>
                                                                        <option value="269">Itatinga</option>
                                                                        <option value="270">Itirapina</option>
                                                                        <option value="271">Itirapuã</option>
                                                                        <option value="272">Itobi</option>
                                                                        <option value="273">Itu</option>
                                                                        <option value="274">Itupeva</option>
                                                                        <option value="275">Ituverava</option>
                                                                        <option value="276">Jaborandi</option>
                                                                        <option value="277">Jaboticabal</option>
                                                                        <option value="278">Jacareí</option>
                                                                        <option value="279">Jaci</option>
                                                                        <option value="280">Jacupiranga</option>
                                                                        <option value="281">Jaguariúna</option>
                                                                        <option value="282">Jales</option>
                                                                        <option value="283">Jambeiro</option>
                                                                        <option value="284">Jandira</option>
                                                                        <option value="285">Jardinópolis</option>
                                                                        <option value="286">Jarinu</option>
                                                                        <option value="287">Jaú</option>
                                                                        <option value="288">Jeriquara</option>
                                                                        <option value="289">Joanópolis</option>
                                                                        <option value="290">João Ramalho</option>
                                                                        <option value="291">José Bonifácio</option>
                                                                        <option value="292">Júlio Mesquita</option>
                                                                        <option value="293">Jumirim</option>
                                                                        <option value="294">Jundiaí</option>
                                                                        <option value="295">Junqueirópolis</option>
                                                                        <option value="296">Juquiá</option>
                                                                        <option value="297">Juquitiba</option>
                                                                        <option value="298">Lagoinha</option>
                                                                        <option value="299">Laranjal Paulista</option>
                                                                        <option value="300">Lavínia</option>
                                                                        <option value="301">Lavrinhas</option>
                                                                        <option value="302">Leme</option>
                                                                        <option value="303">Lençóis Paulista</option>
                                                                        <option value="304">Limeira</option>
                                                                        <option value="305">Lindóia</option>
                                                                        <option value="306">Lins</option>
                                                                        <option value="307">Lorena</option>
                                                                        <option value="308">Lourdes</option>
                                                                        <option value="309">Louveira</option>
                                                                        <option value="310">Lucélia</option>
                                                                        <option value="311">Lucianópolis</option>
                                                                        <option value="312">Luís Antônio</option>
                                                                        <option value="313">Luiziânia</option>
                                                                        <option value="314">Lupércio</option>
                                                                        <option value="315">Lutécia</option>
                                                                        <option value="316">Macatuba</option>
                                                                        <option value="317">Macaubal</option>
                                                                        <option value="318">Macedônia</option>
                                                                        <option value="319">Magda</option>
                                                                        <option value="320">Mairinque</option>
                                                                        <option value="321">Mairiporã</option>
                                                                        <option value="322">Manduri</option>
                                                                        <option value="323">Marabá Paulista</option>
                                                                        <option value="324">Maracaí</option>
                                                                        <option value="325">Marapoama</option>
                                                                        <option value="326">Mariápolis</option>
                                                                        <option value="327">Marília</option>
                                                                        <option value="328">Marinópolis</option>
                                                                        <option value="329">Martinópolis</option>
                                                                        <option value="330">Matão</option>
                                                                        <option value="331">Mauá</option>
                                                                        <option value="332">Mendonça</option>
                                                                        <option value="333">Meridiano</option>
                                                                        <option value="334">Mesópolis</option>
                                                                        <option value="335">Miguelópolis</option>
                                                                        <option value="336">Mineiros do Tietê</option>
                                                                        <option value="337">Miracatu</option>
                                                                        <option value="338">Mira Estrela</option>
                                                                        <option value="339">Mirandópolis</option>
                                                                        <option value="340">Mirante do Paranapanema</option>
                                                                        <option value="341">Mirassol</option>
                                                                        <option value="342">Mirassolândia</option>
                                                                        <option value="343">Mococa</option>
                                                                        <option value="344">Moji Das Cruzes</option>
                                                                        <option value="345">Mogi Guaçu</option>
                                                                        <option value="346">Moji-mirim</option>
                                                                        <option value="347">Mombuca</option>
                                                                        <option value="348">Monções</option>
                                                                        <option value="349">Mongaguá</option>
                                                                        <option value="350">Monte Alegre do Sul</option>
                                                                        <option value="351">Monte Alto</option>
                                                                        <option value="352">Monte Aprazível</option>
                                                                        <option value="353">Monte Azul Paulista</option>
                                                                        <option value="354">Monte Castelo</option>
                                                                        <option value="355">Monteiro Lobato</option>
                                                                        <option value="356">Monte Mor</option>
                                                                        <option value="357">Morro Agudo</option>
                                                                        <option value="358">Morungaba</option>
                                                                        <option value="359">Motuca</option>
                                                                        <option value="360">Murutinga do Sul</option>
                                                                        <option value="361">Nantes</option>
                                                                        <option value="362">Narandiba</option>
                                                                        <option value="363">Natividade da Serra</option>
                                                                        <option value="364">Nazaré Paulista</option>
                                                                        <option value="365">Neves Paulista</option>
                                                                        <option value="366">Nhandeara</option>
                                                                        <option value="367">Nipoã</option>
                                                                        <option value="368">Nova Aliança</option>
                                                                        <option value="369">Nova Campina</option>
                                                                        <option value="370">Nova Canaã Paulista</option>
                                                                        <option value="371">Nova Castilho</option>
                                                                        <option value="372">Nova Europa</option>
                                                                        <option value="373">Nova Granada</option>
                                                                        <option value="374">Nova Guataporanga</option>
                                                                        <option value="375">Nova Independência</option>
                                                                        <option value="376">Novais</option>
                                                                        <option value="377">Nova Luzitânia</option>
                                                                        <option value="378">Nova Odessa</option>
                                                                        <option value="379">Novo Horizonte</option>
                                                                        <option value="380">Nuporanga</option>
                                                                        <option value="381">Ocauçu</option>
                                                                        <option value="382">Óleo</option>
                                                                        <option value="383">Olímpia</option>
                                                                        <option value="384">Onda Verde</option>
                                                                        <option value="385">Oriente</option>
                                                                        <option value="386">Orindiúva</option>
                                                                        <option value="387">Orlândia</option>
                                                                        <option value="388">Osasco</option>
                                                                        <option value="389">Oscar Bressane</option>
                                                                        <option value="390">Osvaldo Cruz</option>
                                                                        <option value="391">Ourinhos</option>
                                                                        <option value="392">Ouroeste</option>
                                                                        <option value="393">Ouro Verde</option>
                                                                        <option value="394">Pacaembu</option>
                                                                        <option value="395">Palestina</option>
                                                                        <option value="396">Palmares Paulista</option>
                                                                        <option value="397">Palmeira D´oeste</option>
                                                                        <option value="398">Palmital</option>
                                                                        <option value="399">Panorama</option>
                                                                        <option value="400">Paraguaçu Paulista</option>
                                                                        <option value="401">Paraibuna</option>
                                                                        <option value="402">Paraíso</option>
                                                                        <option value="403">Paranapanema</option>
                                                                        <option value="404">Paranapuã</option>
                                                                        <option value="405">Parapuã</option>
                                                                        <option value="406">Pardinho</option>
                                                                        <option value="407">Pariquera-açu</option>
                                                                        <option value="408">Parisi</option>
                                                                        <option value="409">Patrocínio Paulista</option>
                                                                        <option value="410">Paulicéia</option>
                                                                        <option value="411">Paulínia</option>
                                                                        <option value="412">Paulistânia</option>
                                                                        <option value="413">Paulo de Faria</option>
                                                                        <option value="414">Pederneiras</option>
                                                                        <option value="415">Pedra Bela</option>
                                                                        <option value="416">Pedranópolis</option>
                                                                        <option value="417">Pedregulho</option>
                                                                        <option value="418">Pedreira</option>
                                                                        <option value="419">Pedrinhas Paulista</option>
                                                                        <option value="420">Pedro de Toledo</option>
                                                                        <option value="421">Penápolis</option>
                                                                        <option value="422">Pereira Barreto</option>
                                                                        <option value="423">Pereiras</option>
                                                                        <option value="424">Peruíbe</option>
                                                                        <option value="425">Piacatu</option>
                                                                        <option value="426">Piedade</option>
                                                                        <option value="427">Pilar do Sul</option>
                                                                        <option value="428">Pindamonhangaba</option>
                                                                        <option value="429">Pindorama</option>
                                                                        <option value="430">Pinhalzinho</option>
                                                                        <option value="431">Piquerobi</option>
                                                                        <option value="432">Piquete</option>
                                                                        <option value="433">Piracaia</option>
                                                                        <option value="434">Piracicaba</option>
                                                                        <option value="435">Piraju</option>
                                                                        <option value="436">Pirajuí</option>
                                                                        <option value="437">Pirangi</option>
                                                                        <option value="438">Pirapora do Bom Jesus</option>
                                                                        <option value="439">Pirapozinho</option>
                                                                        <option value="440">Pirassununga</option>
                                                                        <option value="441">Piratininga</option>
                                                                        <option value="442">Pitangueiras</option>
                                                                        <option value="443">Planalto</option>
                                                                        <option value="444">Platina</option>
                                                                        <option value="445">Poá</option>
                                                                        <option value="446">Poloni</option>
                                                                        <option value="447">Pompéia</option>
                                                                        <option value="448">Pongaí</option>
                                                                        <option value="449">Pontal</option>
                                                                        <option value="450">Pontalinda</option>
                                                                        <option value="451">Pontes Gestal</option>
                                                                        <option value="452">Populina</option>
                                                                        <option value="453">Porangaba</option>
                                                                        <option value="454">Porto Feliz</option>
                                                                        <option value="455">Porto Ferreira</option>
                                                                        <option value="456">Potim</option>
                                                                        <option value="457">Potirendaba</option>
                                                                        <option value="458">Pracinha</option>
                                                                        <option value="459">Pradópolis</option>
                                                                        <option value="460">Praia Grande</option>
                                                                        <option value="461">Pratânia</option>
                                                                        <option value="462">Presidente Alves</option>
                                                                        <option value="463">Presidente Bernardes</option>
                                                                        <option value="464">Presidente Epitácio</option>
                                                                        <option value="465">Presidente Prudente</option>
                                                                        <option value="466">Presidente Venceslau</option>
                                                                        <option value="467">Promissão</option>
                                                                        <option value="468">Quadra</option>
                                                                        <option value="469">Quatá</option>
                                                                        <option value="470">Queiroz</option>
                                                                        <option value="471">Queluz</option>
                                                                        <option value="472">Quintana</option>
                                                                        <option value="473">Rafard</option>
                                                                        <option value="474">Rancharia</option>
                                                                        <option value="475">Redenção da Serra</option>
                                                                        <option value="476">Regente Feijó</option>
                                                                        <option value="477">Reginópolis</option>
                                                                        <option value="478">Registro</option>
                                                                        <option value="479">Restinga</option>
                                                                        <option value="480">Ribeira</option>
                                                                        <option value="481">Ribeirão Bonito</option>
                                                                        <option value="482">Ribeirão Branco</option>
                                                                        <option value="483">Ribeirão Corrente</option>
                                                                        <option value="484">Ribeirão do Sul</option>
                                                                        <option value="485">Ribeirão Dos Índios</option>
                                                                        <option value="486">Ribeirão Grande</option>
                                                                        <option value="487">Ribeirão Pires</option>
                                                                        <option value="488">Ribeirão Preto</option>
                                                                        <option value="489">Riversul</option>
                                                                        <option value="490">Rifaina</option>
                                                                        <option value="491">Rincão</option>
                                                                        <option value="492">Rinópolis</option>
                                                                        <option value="493">Rio Claro</option>
                                                                        <option value="494">Rio Das Pedras</option>
                                                                        <option value="495">Rio Grande da Serra</option>
                                                                        <option value="496">Riolândia</option>
                                                                        <option value="497">Rosana</option>
                                                                        <option value="498">Roseira</option>
                                                                        <option value="499">Rubiácea</option>
                                                                        <option value="500">Rubinéia</option>
                                                                        <option value="501">Sabino</option>
                                                                        <option value="502">Sagres</option>
                                                                        <option value="503">Sales</option>
                                                                        <option value="504">Sales Oliveira</option>
                                                                        <option value="505">Salesópolis</option>
                                                                        <option value="506">Salmourão</option>
                                                                        <option value="507">Saltinho</option>
                                                                        <option value="508">Salto</option>
                                                                        <option value="509">Salto de Pirapora</option>
                                                                        <option value="510">Salto Grande</option>
                                                                        <option value="511">Sandovalina</option>
                                                                        <option value="512">Santa Adélia</option>
                                                                        <option value="513">Santa Albertina</option>
                                                                        <option value="514">Santa Bárbara D´oeste</option>
                                                                        <option value="515">Santa Branca</option>
                                                                        <option value="516">Santa Clara D´oeste</option>
                                                                        <option value="517">Santa Cruz da Conceição</option>
                                                                        <option value="518">Santa Cruz da Esperança</option>
                                                                        <option value="519">Santa Cruz Das Palmeiras</option>
                                                                        <option value="520">Santa Cruz do Rio Pardo</option>
                                                                        <option value="521">Santa Ernestina</option>
                                                                        <option value="522">Santa fé do Sul</option>
                                                                        <option value="523">Santa Gertrudes</option>
                                                                        <option value="524">Santa Isabel</option>
                                                                        <option value="525">Santa Lúcia</option>
                                                                        <option value="526">Santa Maria da Serra</option>
                                                                        <option value="527">Santa Mercedes</option>
                                                                        <option value="528">Santana da Ponte Pensa</option>
                                                                        <option value="529">Santana de Parnaíba</option>
                                                                        <option value="530">Santa Rita D´oeste</option>
                                                                        <option value="531">Santa Rita do Passa Quatro</option>
                                                                        <option value="532">Santa Rosa de Viterbo</option>
                                                                        <option value="533">Santa Salete</option>
                                                                        <option value="534">Santo Anastácio</option>
                                                                        <option value="535">Santo André</option>
                                                                        <option value="536">Santo Antônio da Alegria</option>
                                                                        <option value="537">Santo Antônio de Posse</option>
                                                                        <option value="538">Santo Antônio do Aracanguá</option>
                                                                        <option value="539">Santo Antônio do Jardim</option>
                                                                        <option value="540">Santo Antônio do Pinhal</option>
                                                                        <option value="541">Santo Expedito</option>
                                                                        <option value="542">Santópolis do Aguapeí</option>
                                                                        <option value="543">Santos</option>
                                                                        <option value="544">São Bento do Sapucaí</option>
                                                                        <option value="545">São Bernardo do Campo</option>
                                                                        <option value="546">São Caetano do Sul</option>
                                                                        <option value="547">São Carlos</option>
                                                                        <option value="548">São Francisco</option>
                                                                        <option value="549">São João da Boa Vista</option>
                                                                        <option value="550">São João Das Duas Pontes</option>
                                                                        <option value="551">São João de Iracema</option>
                                                                        <option value="552">São João do Pau D´alho</option>
                                                                        <option value="553">São Joaquim da Barra</option>
                                                                        <option value="554">São José da Bela Vista</option>
                                                                        <option value="555">São José do Barreiro</option>
                                                                        <option value="556">São José do Rio Pardo</option>
                                                                        <option value="557">São José do Rio Preto</option>
                                                                        <option value="558">São José Dos Campos</option>
                                                                        <option value="559">São Lourenço da Serra</option>
                                                                        <option value="560">São Luís do Paraitinga</option>
                                                                        <option value="561">São Manuel</option>
                                                                        <option value="562">São Miguel Arcanjo</option>
                                                                        <option value="563">São Paulo</option>
                                                                        <option value="564">São Pedro</option>
                                                                        <option value="565">São Pedro do Turvo</option>
                                                                        <option value="566">São Roque</option>
                                                                        <option value="567">São Sebastião</option>
                                                                        <option value="568">São Sebastião da Grama</option>
                                                                        <option value="569">São Simão</option>
                                                                        <option value="570">São Vicente</option>
                                                                        <option value="571">Sarapuí</option>
                                                                        <option value="572">Sarutaiá</option>
                                                                        <option value="573">Sebastianópolis do Sul</option>
                                                                        <option value="574">Serra Azul</option>
                                                                        <option value="575">Serrana</option>
                                                                        <option value="576">Serra Negra</option>
                                                                        <option value="577">Sertãozinho</option>
                                                                        <option value="578">Sete Barras</option>
                                                                        <option value="579">Severínia</option>
                                                                        <option value="580">Silveiras</option>
                                                                        <option value="581">Socorro</option>
                                                                        <option value="582">Sorocaba</option>
                                                                        <option value="583">Sud Mennucci</option>
                                                                        <option value="584">Sumaré</option>
                                                                        <option value="585">Suzano</option>
                                                                        <option value="586">Suzanápolis</option>
                                                                        <option value="587">Tabapuã</option>
                                                                        <option value="588">Tabatinga</option>
                                                                        <option value="589">Taboão da Serra</option>
                                                                        <option value="590">Taciba</option>
                                                                        <option value="591">Taguaí</option>
                                                                        <option value="592">Taiaçu</option>
                                                                        <option value="593">Taiúva</option>
                                                                        <option value="594">Tambaú</option>
                                                                        <option value="595">Tanabi</option>
                                                                        <option value="596">Tapiraí</option>
                                                                        <option value="597">Tapiratiba</option>
                                                                        <option value="598">Taquaral</option>
                                                                        <option value="599">Taquaritinga</option>
                                                                        <option value="600">Taquarituba</option>
                                                                        <option value="601">Taquarivaí</option>
                                                                        <option value="602">Tarabai</option>
                                                                        <option value="603">Tarumã</option>
                                                                        <option value="604">Tatuí</option>
                                                                        <option value="605">Taubaté</option>
                                                                        <option value="606">Tejupá</option>
                                                                        <option value="607">Teodoro Sampaio</option>
                                                                        <option value="608">Terra Roxa</option>
                                                                        <option value="609">Tietê</option>
                                                                        <option value="610">Timburi</option>
                                                                        <option value="611">Torre de Pedra</option>
                                                                        <option value="612">Torrinha</option>
                                                                        <option value="613">Trabiju</option>
                                                                        <option value="614">Tremembé</option>
                                                                        <option value="615">Três Fronteiras</option>
                                                                        <option value="616">Tuiuti</option>
                                                                        <option value="617">Tupã</option>
                                                                        <option value="618">Tupi Paulista</option>
                                                                        <option value="619">Turiúba</option>
                                                                        <option value="620">Turmalina</option>
                                                                        <option value="621">Ubarana</option>
                                                                        <option value="622">Ubatuba</option>
                                                                        <option value="623">Ubirajara</option>
                                                                        <option value="624">Uchoa</option>
                                                                        <option value="625">União Paulista</option>
                                                                        <option value="626">Urânia</option>
                                                                        <option value="627">Uru</option>
                                                                        <option value="628">Urupês</option>
                                                                        <option value="629">Valentim Gentil</option>
                                                                        <option value="630">Valinhos</option>
                                                                        <option value="631">Valparaíso</option>
                                                                        <option value="632">Vargem</option>
                                                                        <option value="633">Vargem Grande do Sul</option>
                                                                        <option value="634">Vargem Grande Paulista</option>
                                                                        <option value="635">Várzea Paulista</option>
                                                                        <option value="636">Vera Cruz</option>
                                                                        <option value="637">Vinhedo</option>
                                                                        <option value="638">Viradouro</option>
                                                                        <option value="639">Vista Alegre do Alto</option>
                                                                        <option value="640">Vitória Brasil</option>
                                                                        <option value="641">Votorantim</option>
                                                                        <option value="642">Votuporanga</option>
                                                                        <option value="643">Zacarias</option>
                                                                                                                                                                             
                                                                        
                                                                    </select>
                                                                </div> 
                                                                
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-form-label">Valor R$</label>
                                                                <div class="col-sm-1">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <label class="col-form-label">Ano Fabricação</label>
                                                                <div class="col-sm-2">
                                                                    <select name="select" class="form-control">
                                                                        <option value="1">2021</option>
                                                                        <option value="2">2020</option>
                                                                        <option value="3">2019</option>
                                                                        <option value="4">2018</option>
                                                                        <option value="5">2017</option>
                                                                        <option value="6">2016</option>
                                                                        <option value="5">2015</option>
                                                                        <option value="6">2014</option>
                                                                        <option value="5">2013</option>
                                                                        <option value="6">2012</option>
                                                                        <option value="5">2011</option>
                                                                        <option value="6">2010</option>
                                                                        <option value="5">2009</option>
                                                                        <option value="6">2008</option>
                                                                    </select>
                                                                </div>
                                                                <label class="col-form-label">Ano Modelo</label>
                                                                <div class="col-sm-2">
                                                                    <select name="select" class="form-control">
                                                                        <option value="1">2021</option>
                                                                        <option value="2">2020</option>
                                                                        <option value="3">2019</option>
                                                                        <option value="4">2018</option>
                                                                        <option value="5">2017</option>
                                                                        <option value="6">2016</option>
                                                                        <option value="5">2015</option>
                                                                        <option value="6">2014</option>
                                                                        <option value="5">2013</option>
                                                                        <option value="6">2012</option>
                                                                        <option value="5">2011</option>
                                                                        <option value="6">2010</option>
                                                                        <option value="5">2009</option>
                                                                        <option value="6">2008</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="form-group row">
                                                                <img src="fotos/fotox.png" onclick="abrirfoto(1)" class="img-tabs col-sm-2" id="foto1" alt="Foto1">
                                                                <img src="fotos/fotox.png" onclick="abrirfoto(2)" class="img-tabs col-sm-2" id="foto2" alt="Foto2">
                                                                <img src="fotos/fotox.png" onclick="abrirfoto(3)" class="img-tabs col-sm-2" id="foto3" alt="Foto3">

                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Salvar Dados</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>


                                        <!-- Warning Section Starts -->
                                        <!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
<!-- classie js -->
<script type="text/javascript" src="assets/js/classie/classie.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>
