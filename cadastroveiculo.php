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
                                        <span>Cassio Sim??es</span>
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
                                                                <label class="col-form-label">Combust??vel</label>
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
                                                                        <option value="7">GREN??</option>
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
                                                                        <option value="AP">Amap??</option>
                                                                        <option value="AM">Amazonas</option>
                                                                        <option value="BA">Bahia</option>
                                                                        <option value="CE">Cear??</option>
                                                                        <option value="DF">Distrito Federal</option>
                                                                        <option value="ES">Esp??rito Santo</option>
                                                                        <option value="GO">Goi??s</option>
                                                                        <option value="MA">Maranh??o</option>
                                                                        <option value="MT">Mato Grosso</option>
                                                                        <option value="MS">Mato Grosso do Sul</option>
                                                                        <option value="MG">Minas Gerais</option>
                                                                        <option value="PA">Par??</option>
                                                                        <option value="PB">Para??ba</option>
                                                                        <option value="PR">Paran??</option>
                                                                        <option value="PE">Pernambuco</option>
                                                                        <option value="PI">Piau??</option>
                                                                        <option value="RJ">Rio de Janeiro</option>
                                                                        <option value="RN">Rio Grande do Norte</option>
                                                                        <option value="RS">Rio Grande do Sul</option>
                                                                        <option value="RO">Rond??nia</option>
                                                                        <option value="RR">Roraima</option>
                                                                        <option value="SC">Santa Catarina</option>
                                                                        <option value="SP">S??o Paulo</option>
                                                                        <option value="SE">Sergipe</option>
                                                                        <option value="TO">Tocantins</option>
                                                                        <option value="EX">Estrangeiro</option>                                                                                                        
                                                                        
                                                                    </select>
                                                                </div> 
                                                                <label class="col-form-label">Munic??pio</label>
                                                                <div class="col-sm-2">
                                                                    <select name="select" class="form-control">
                                                                        <option value="0">Selecione</option>
                                                                        <option value="1">Adamantina</option>
                                                                        <option value="2">Adolfo</option>
                                                                        <option value="3">Agua??</option>
                                                                        <option value="4">??guas da Prata</option>
                                                                        <option value="5">??guas de Lind??ia</option>
                                                                        <option value="6">??guas de Santa B??rbara</option>
                                                                        <option value="7">??guas de S??o Pedro</option>
                                                                        <option value="8">Agudos</option>
                                                                        <option value="9">Alambari</option>
                                                                        <option value="10">Alfredo Marcondes</option>
                                                                        <option value="11">Altair</option>
                                                                        <option value="12">Altin??polis</option>
                                                                        <option value="13">Alto Alegre</option>
                                                                        <option value="14">Alum??nio</option>
                                                                        <option value="15">??lvares Florence</option>
                                                                        <option value="16">??lvares Machado</option>
                                                                        <option value="17">??lvaro de Carvalho</option>
                                                                        <option value="18">Alvinl??ndia</option>
                                                                        <option value="19">Americana</option>
                                                                        <option value="20">Am??rico Brasiliense</option>
                                                                        <option value="21">Am??rico de Campos</option>
                                                                        <option value="22">Amparo</option>
                                                                        <option value="23">Anal??ndia</option>
                                                                        <option value="24">Andradina</option>
                                                                        <option value="25">Angatuba</option>
                                                                        <option value="26">Anhembi</option>
                                                                        <option value="27">Anhumas</option>
                                                                        <option value="28">Aparecida</option>
                                                                        <option value="29">Aparecida D??oeste</option>
                                                                        <option value="30">Apia??</option>
                                                                        <option value="31">Ara??ariguama</option>
                                                                        <option value="32">Ara??atuba</option>
                                                                        <option value="33">Ara??oiaba da Serra</option>
                                                                        <option value="34">Aramina</option>
                                                                        <option value="35">Arandu</option>
                                                                        <option value="36">Arape??</option>
                                                                        <option value="37">Araraquara</option>
                                                                        <option value="38">Araras</option>
                                                                        <option value="39">Arco-??ris</option>
                                                                        <option value="40">Arealva</option>
                                                                        <option value="41">Areias</option>
                                                                        <option value="42">Arei??polis</option>
                                                                        <option value="43">Ariranha</option>
                                                                        <option value="44">Artur Nogueira</option>
                                                                        <option value="45">Aruj??</option>
                                                                        <option value="46">Asp??sia</option>
                                                                        <option value="47">Assis</option>
                                                                        <option value="48">Atibaia</option>
                                                                        <option value="49">Auriflama</option>
                                                                        <option value="50">Ava??</option>
                                                                        <option value="51">Avanhandava</option>
                                                                        <option value="52">Avar??</option>
                                                                        <option value="53">Bady Bassitt</option>
                                                                        <option value="54">Balbinos</option>
                                                                        <option value="55">B??lsamo</option>
                                                                        <option value="56">Bananal</option>
                                                                        <option value="57">Bar??o de Antonina</option>
                                                                        <option value="58">Barbosa</option>
                                                                        <option value="59">Bariri</option>
                                                                        <option value="60">Barra Bonita</option>
                                                                        <option value="61">Barra do Chap??u</option>
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
                                                                        <option value="76">Boa Esperan??a do Sul</option>
                                                                        <option value="77">Bocaina</option>
                                                                        <option value="78">Bofete</option>
                                                                        <option value="79">Boituva</option>
                                                                        <option value="80">Bom Jesus Dos Perd??es</option>
                                                                        <option value="81">Bom Sucesso de Itarar??</option>
                                                                        <option value="82">Bor??</option>
                                                                        <option value="83">Borac??ia</option>
                                                                        <option value="84">Borborema</option>
                                                                        <option value="85">Borebi</option>
                                                                        <option value="86">Botucatu</option>
                                                                        <option value="87">Bragan??a Paulista</option>
                                                                        <option value="88">Bra??na</option>
                                                                        <option value="89">Brejo Alegre</option>
                                                                        <option value="90">Brodowski</option>
                                                                        <option value="91">Brotas</option>
                                                                        <option value="92">Buri</option>
                                                                        <option value="93">Buritama</option>
                                                                        <option value="94">Buritizal</option>
                                                                        <option value="95">Cabr??lia Paulista</option>
                                                                        <option value="96">Cabre??va</option>
                                                                        <option value="97">Ca??apava</option>
                                                                        <option value="98">Cachoeira Paulista</option>
                                                                        <option value="99">Caconde</option>
                                                                        <option value="100">Cafel??ndia</option>
                                                                        <option value="101">Caiabu</option>
                                                                        <option value="102">Caieiras</option>
                                                                        <option value="103">Caiu??</option>
                                                                        <option value="104">Cajamar</option>
                                                                        <option value="105">Cajati</option>
                                                                        <option value="106">Cajobi</option>
                                                                        <option value="107">Cajuru</option>
                                                                        <option value="108">Campina do Monte Alegre</option>
                                                                        <option value="109">Campinas</option>
                                                                        <option value="110">Campo Limpo Paulista</option>
                                                                        <option value="111">Campos do Jord??o</option>
                                                                        <option value="112">Campos Novos Paulista</option>
                                                                        <option value="113">Canan??ia</option>
                                                                        <option value="114">Canas</option>
                                                                        <option value="115">C??ndido Mota</option>
                                                                        <option value="116">C??ndido Rodrigues</option>
                                                                        <option value="117">Canitar</option>
                                                                        <option value="118">Cap??o Bonito</option>
                                                                        <option value="119">Capela do Alto</option>
                                                                        <option value="120">Capivari</option>
                                                                        <option value="121">Caraguatatuba</option>
                                                                        <option value="122">Carapicu??ba</option>
                                                                        <option value="123">Cardoso</option>
                                                                        <option value="124">Casa Branca</option>
                                                                        <option value="125">C??ssia Dos Coqueiros</option>
                                                                        <option value="126">Castilho</option>
                                                                        <option value="127">Catanduva</option>
                                                                        <option value="128">Catigu??</option>
                                                                        <option value="129">Cedral</option>
                                                                        <option value="130">Cerqueira C??sar</option>
                                                                        <option value="131">Cerquilho</option>
                                                                        <option value="132">Ces??rio Lange</option>
                                                                        <option value="133">Charqueada</option>
                                                                        <option value="134">Clementina</option>
                                                                        <option value="135">Colina</option>
                                                                        <option value="136">Col??mbia</option>
                                                                        <option value="137">Conchal</option>
                                                                        <option value="138">Conchas</option>
                                                                        <option value="139">Cordeir??polis</option>
                                                                        <option value="140">Coroados</option>
                                                                        <option value="141">Coronel Macedo</option>
                                                                        <option value="142">Corumbata??</option>
                                                                        <option value="143">Cosm??polis</option>
                                                                        <option value="144">Cosmorama</option>
                                                                        <option value="145">Cotia</option>
                                                                        <option value="146">Cravinhos</option>
                                                                        <option value="147">Cristais Paulista</option>
                                                                        <option value="148">Cruz??lia</option>
                                                                        <option value="149">Cruzeiro</option>
                                                                        <option value="150">Cubat??o</option>
                                                                        <option value="151">Cunha</option>
                                                                        <option value="152">Descalvado</option>
                                                                        <option value="153">Diadema</option>
                                                                        <option value="154">Dirce Reis</option>
                                                                        <option value="155">Divinol??ndia</option>
                                                                        <option value="156">Dobrada</option>
                                                                        <option value="157">Dois C??rregos</option>
                                                                        <option value="158">Dolcin??polis</option>
                                                                        <option value="159">Dourado</option>
                                                                        <option value="160">Dracena</option>
                                                                        <option value="161">Duartina</option>
                                                                        <option value="162">Dumont</option>
                                                                        <option value="163">Echapor??</option>
                                                                        <option value="164">Eldorado</option>
                                                                        <option value="165">Elias Fausto</option>
                                                                        <option value="166">Elisi??rio</option>
                                                                        <option value="167">Emba??ba</option>
                                                                        <option value="168">Embu</option>
                                                                        <option value="169">Embu-gua??u</option>
                                                                        <option value="170">Emilian??polis</option>
                                                                        <option value="171">Engenheiro Coelho</option>
                                                                        <option value="172">Esp??rito Santo do Pinhal</option>
                                                                        <option value="173">Esp??rito Santo do Turvo</option>
                                                                        <option value="174">Estrela D??oeste</option>
                                                                        <option value="175">Estrela do Norte</option>
                                                                        <option value="176">Euclides da Cunha Paulista</option>
                                                                        <option value="177">Fartura</option>
                                                                        <option value="178">Fernand??polis</option>
                                                                        <option value="179">Fernando Prestes</option>
                                                                        <option value="180">Fern??o</option>
                                                                        <option value="181">Ferraz de Vasconcelos</option>
                                                                        <option value="182">Flora Rica</option>
                                                                        <option value="183">Floreal</option>
                                                                        <option value="184">Fl??rida Paulista</option>
                                                                        <option value="185">Flor??nia</option>
                                                                        <option value="186">Franca</option>
                                                                        <option value="187">Francisco Morato</option>
                                                                        <option value="188">Franco da Rocha</option>
                                                                        <option value="189">Gabriel Monteiro</option>
                                                                        <option value="190">G??lia</option>
                                                                        <option value="191">Gar??a</option>
                                                                        <option value="192">Gast??o Vidigal</option>
                                                                        <option value="193">Gavi??o Peixoto</option>
                                                                        <option value="194">General Salgado</option>
                                                                        <option value="195">Getulina</option>
                                                                        <option value="196">Glic??rio</option>
                                                                        <option value="197">Guai??ara</option>
                                                                        <option value="198">Guaimb??</option>
                                                                        <option value="199">Gua??ra</option>
                                                                        <option value="200">Guapia??u</option>
                                                                        <option value="201">Guapiara</option>
                                                                        <option value="202">Guar??</option>
                                                                        <option value="203">Guara??a??</option>
                                                                        <option value="204">Guaraci</option>
                                                                        <option value="205">Guarani D??oeste</option>
                                                                        <option value="206">Guarant??</option>
                                                                        <option value="207">Guararapes</option>
                                                                        <option value="208">Guararema</option>
                                                                        <option value="209">Guaratinguet??</option>
                                                                        <option value="210">Guare??</option>
                                                                        <option value="211">Guariba</option>
                                                                        <option value="212">Guaruj??</option>
                                                                        <option value="213">Guarulhos</option>
                                                                        <option value="214">Guatapar??</option>
                                                                        <option value="215">Guzol??ndia</option>
                                                                        <option value="216">Hercul??ndia</option>
                                                                        <option value="217">Holambra</option>
                                                                        <option value="218">Hortol??ndia</option>
                                                                        <option value="219">Iacanga</option>
                                                                        <option value="220">Iacri</option>
                                                                        <option value="221">Iaras</option>
                                                                        <option value="222">Ibat??</option>
                                                                        <option value="223">Ibir??</option>
                                                                        <option value="224">Ibirarema</option>
                                                                        <option value="225">Ibitinga</option>
                                                                        <option value="226">Ibi??na</option>
                                                                        <option value="227">Ic??m</option>
                                                                        <option value="228">Iep??</option>
                                                                        <option value="229">Igara??u do Tiet??</option>
                                                                        <option value="230">Igarapava</option>
                                                                        <option value="231">Igarat??</option>
                                                                        <option value="232">Iguape</option>
                                                                        <option value="233">Ilhabela</option>
                                                                        <option value="234">Ilha Comprida</option>
                                                                        <option value="235">Ilha Solteira</option>
                                                                        <option value="236">Indaiatuba</option>
                                                                        <option value="237">Indiana</option>
                                                                        <option value="238">Indiapor??</option>
                                                                        <option value="239">In??bia Paulista</option>
                                                                        <option value="240">Ipaussu</option>
                                                                        <option value="241">Iper??</option>
                                                                        <option value="242">Ipe??na</option>
                                                                        <option value="243">Ipigu??</option>
                                                                        <option value="244">Iporanga</option>
                                                                        <option value="245">Ipu??</option>
                                                                        <option value="246">Iracem??polis</option>
                                                                        <option value="247">Irapu??</option>
                                                                        <option value="248">Irapuru</option>
                                                                        <option value="249">Itaber??</option>
                                                                        <option value="250">Ita??</option>
                                                                        <option value="251">Itajobi</option>
                                                                        <option value="252">Itaju</option>
                                                                        <option value="253">Itanha??m</option>
                                                                        <option value="254">Ita??ca</option>
                                                                        <option value="255">Itapecerica da Serra</option>
                                                                        <option value="256">Itapetininga</option>
                                                                        <option value="257">Itapeva</option>
                                                                        <option value="258">Itapevi</option>
                                                                        <option value="259">Itapira</option>
                                                                        <option value="260">Itapirapu?? Paulista</option>
                                                                        <option value="261">It??polis</option>
                                                                        <option value="262">Itaporanga</option>
                                                                        <option value="263">Itapu??</option>
                                                                        <option value="264">Itapura</option>
                                                                        <option value="265">Itaquaquecetuba</option>
                                                                        <option value="266">Itarar??</option>
                                                                        <option value="267">Itariri</option>
                                                                        <option value="268">Itatiba</option>
                                                                        <option value="269">Itatinga</option>
                                                                        <option value="270">Itirapina</option>
                                                                        <option value="271">Itirapu??</option>
                                                                        <option value="272">Itobi</option>
                                                                        <option value="273">Itu</option>
                                                                        <option value="274">Itupeva</option>
                                                                        <option value="275">Ituverava</option>
                                                                        <option value="276">Jaborandi</option>
                                                                        <option value="277">Jaboticabal</option>
                                                                        <option value="278">Jacare??</option>
                                                                        <option value="279">Jaci</option>
                                                                        <option value="280">Jacupiranga</option>
                                                                        <option value="281">Jaguari??na</option>
                                                                        <option value="282">Jales</option>
                                                                        <option value="283">Jambeiro</option>
                                                                        <option value="284">Jandira</option>
                                                                        <option value="285">Jardin??polis</option>
                                                                        <option value="286">Jarinu</option>
                                                                        <option value="287">Ja??</option>
                                                                        <option value="288">Jeriquara</option>
                                                                        <option value="289">Joan??polis</option>
                                                                        <option value="290">Jo??o Ramalho</option>
                                                                        <option value="291">Jos?? Bonif??cio</option>
                                                                        <option value="292">J??lio Mesquita</option>
                                                                        <option value="293">Jumirim</option>
                                                                        <option value="294">Jundia??</option>
                                                                        <option value="295">Junqueir??polis</option>
                                                                        <option value="296">Juqui??</option>
                                                                        <option value="297">Juquitiba</option>
                                                                        <option value="298">Lagoinha</option>
                                                                        <option value="299">Laranjal Paulista</option>
                                                                        <option value="300">Lav??nia</option>
                                                                        <option value="301">Lavrinhas</option>
                                                                        <option value="302">Leme</option>
                                                                        <option value="303">Len????is Paulista</option>
                                                                        <option value="304">Limeira</option>
                                                                        <option value="305">Lind??ia</option>
                                                                        <option value="306">Lins</option>
                                                                        <option value="307">Lorena</option>
                                                                        <option value="308">Lourdes</option>
                                                                        <option value="309">Louveira</option>
                                                                        <option value="310">Luc??lia</option>
                                                                        <option value="311">Lucian??polis</option>
                                                                        <option value="312">Lu??s Ant??nio</option>
                                                                        <option value="313">Luizi??nia</option>
                                                                        <option value="314">Lup??rcio</option>
                                                                        <option value="315">Lut??cia</option>
                                                                        <option value="316">Macatuba</option>
                                                                        <option value="317">Macaubal</option>
                                                                        <option value="318">Maced??nia</option>
                                                                        <option value="319">Magda</option>
                                                                        <option value="320">Mairinque</option>
                                                                        <option value="321">Mairipor??</option>
                                                                        <option value="322">Manduri</option>
                                                                        <option value="323">Marab?? Paulista</option>
                                                                        <option value="324">Maraca??</option>
                                                                        <option value="325">Marapoama</option>
                                                                        <option value="326">Mari??polis</option>
                                                                        <option value="327">Mar??lia</option>
                                                                        <option value="328">Marin??polis</option>
                                                                        <option value="329">Martin??polis</option>
                                                                        <option value="330">Mat??o</option>
                                                                        <option value="331">Mau??</option>
                                                                        <option value="332">Mendon??a</option>
                                                                        <option value="333">Meridiano</option>
                                                                        <option value="334">Mes??polis</option>
                                                                        <option value="335">Miguel??polis</option>
                                                                        <option value="336">Mineiros do Tiet??</option>
                                                                        <option value="337">Miracatu</option>
                                                                        <option value="338">Mira Estrela</option>
                                                                        <option value="339">Mirand??polis</option>
                                                                        <option value="340">Mirante do Paranapanema</option>
                                                                        <option value="341">Mirassol</option>
                                                                        <option value="342">Mirassol??ndia</option>
                                                                        <option value="343">Mococa</option>
                                                                        <option value="344">Moji Das Cruzes</option>
                                                                        <option value="345">Mogi Gua??u</option>
                                                                        <option value="346">Moji-mirim</option>
                                                                        <option value="347">Mombuca</option>
                                                                        <option value="348">Mon????es</option>
                                                                        <option value="349">Mongagu??</option>
                                                                        <option value="350">Monte Alegre do Sul</option>
                                                                        <option value="351">Monte Alto</option>
                                                                        <option value="352">Monte Apraz??vel</option>
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
                                                                        <option value="364">Nazar?? Paulista</option>
                                                                        <option value="365">Neves Paulista</option>
                                                                        <option value="366">Nhandeara</option>
                                                                        <option value="367">Nipo??</option>
                                                                        <option value="368">Nova Alian??a</option>
                                                                        <option value="369">Nova Campina</option>
                                                                        <option value="370">Nova Cana?? Paulista</option>
                                                                        <option value="371">Nova Castilho</option>
                                                                        <option value="372">Nova Europa</option>
                                                                        <option value="373">Nova Granada</option>
                                                                        <option value="374">Nova Guataporanga</option>
                                                                        <option value="375">Nova Independ??ncia</option>
                                                                        <option value="376">Novais</option>
                                                                        <option value="377">Nova Luzit??nia</option>
                                                                        <option value="378">Nova Odessa</option>
                                                                        <option value="379">Novo Horizonte</option>
                                                                        <option value="380">Nuporanga</option>
                                                                        <option value="381">Ocau??u</option>
                                                                        <option value="382">??leo</option>
                                                                        <option value="383">Ol??mpia</option>
                                                                        <option value="384">Onda Verde</option>
                                                                        <option value="385">Oriente</option>
                                                                        <option value="386">Orindi??va</option>
                                                                        <option value="387">Orl??ndia</option>
                                                                        <option value="388">Osasco</option>
                                                                        <option value="389">Oscar Bressane</option>
                                                                        <option value="390">Osvaldo Cruz</option>
                                                                        <option value="391">Ourinhos</option>
                                                                        <option value="392">Ouroeste</option>
                                                                        <option value="393">Ouro Verde</option>
                                                                        <option value="394">Pacaembu</option>
                                                                        <option value="395">Palestina</option>
                                                                        <option value="396">Palmares Paulista</option>
                                                                        <option value="397">Palmeira D??oeste</option>
                                                                        <option value="398">Palmital</option>
                                                                        <option value="399">Panorama</option>
                                                                        <option value="400">Paragua??u Paulista</option>
                                                                        <option value="401">Paraibuna</option>
                                                                        <option value="402">Para??so</option>
                                                                        <option value="403">Paranapanema</option>
                                                                        <option value="404">Paranapu??</option>
                                                                        <option value="405">Parapu??</option>
                                                                        <option value="406">Pardinho</option>
                                                                        <option value="407">Pariquera-a??u</option>
                                                                        <option value="408">Parisi</option>
                                                                        <option value="409">Patroc??nio Paulista</option>
                                                                        <option value="410">Paulic??ia</option>
                                                                        <option value="411">Paul??nia</option>
                                                                        <option value="412">Paulist??nia</option>
                                                                        <option value="413">Paulo de Faria</option>
                                                                        <option value="414">Pederneiras</option>
                                                                        <option value="415">Pedra Bela</option>
                                                                        <option value="416">Pedran??polis</option>
                                                                        <option value="417">Pedregulho</option>
                                                                        <option value="418">Pedreira</option>
                                                                        <option value="419">Pedrinhas Paulista</option>
                                                                        <option value="420">Pedro de Toledo</option>
                                                                        <option value="421">Pen??polis</option>
                                                                        <option value="422">Pereira Barreto</option>
                                                                        <option value="423">Pereiras</option>
                                                                        <option value="424">Peru??be</option>
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
                                                                        <option value="436">Piraju??</option>
                                                                        <option value="437">Pirangi</option>
                                                                        <option value="438">Pirapora do Bom Jesus</option>
                                                                        <option value="439">Pirapozinho</option>
                                                                        <option value="440">Pirassununga</option>
                                                                        <option value="441">Piratininga</option>
                                                                        <option value="442">Pitangueiras</option>
                                                                        <option value="443">Planalto</option>
                                                                        <option value="444">Platina</option>
                                                                        <option value="445">Po??</option>
                                                                        <option value="446">Poloni</option>
                                                                        <option value="447">Pomp??ia</option>
                                                                        <option value="448">Ponga??</option>
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
                                                                        <option value="459">Prad??polis</option>
                                                                        <option value="460">Praia Grande</option>
                                                                        <option value="461">Prat??nia</option>
                                                                        <option value="462">Presidente Alves</option>
                                                                        <option value="463">Presidente Bernardes</option>
                                                                        <option value="464">Presidente Epit??cio</option>
                                                                        <option value="465">Presidente Prudente</option>
                                                                        <option value="466">Presidente Venceslau</option>
                                                                        <option value="467">Promiss??o</option>
                                                                        <option value="468">Quadra</option>
                                                                        <option value="469">Quat??</option>
                                                                        <option value="470">Queiroz</option>
                                                                        <option value="471">Queluz</option>
                                                                        <option value="472">Quintana</option>
                                                                        <option value="473">Rafard</option>
                                                                        <option value="474">Rancharia</option>
                                                                        <option value="475">Reden????o da Serra</option>
                                                                        <option value="476">Regente Feij??</option>
                                                                        <option value="477">Regin??polis</option>
                                                                        <option value="478">Registro</option>
                                                                        <option value="479">Restinga</option>
                                                                        <option value="480">Ribeira</option>
                                                                        <option value="481">Ribeir??o Bonito</option>
                                                                        <option value="482">Ribeir??o Branco</option>
                                                                        <option value="483">Ribeir??o Corrente</option>
                                                                        <option value="484">Ribeir??o do Sul</option>
                                                                        <option value="485">Ribeir??o Dos ??ndios</option>
                                                                        <option value="486">Ribeir??o Grande</option>
                                                                        <option value="487">Ribeir??o Pires</option>
                                                                        <option value="488">Ribeir??o Preto</option>
                                                                        <option value="489">Riversul</option>
                                                                        <option value="490">Rifaina</option>
                                                                        <option value="491">Rinc??o</option>
                                                                        <option value="492">Rin??polis</option>
                                                                        <option value="493">Rio Claro</option>
                                                                        <option value="494">Rio Das Pedras</option>
                                                                        <option value="495">Rio Grande da Serra</option>
                                                                        <option value="496">Riol??ndia</option>
                                                                        <option value="497">Rosana</option>
                                                                        <option value="498">Roseira</option>
                                                                        <option value="499">Rubi??cea</option>
                                                                        <option value="500">Rubin??ia</option>
                                                                        <option value="501">Sabino</option>
                                                                        <option value="502">Sagres</option>
                                                                        <option value="503">Sales</option>
                                                                        <option value="504">Sales Oliveira</option>
                                                                        <option value="505">Sales??polis</option>
                                                                        <option value="506">Salmour??o</option>
                                                                        <option value="507">Saltinho</option>
                                                                        <option value="508">Salto</option>
                                                                        <option value="509">Salto de Pirapora</option>
                                                                        <option value="510">Salto Grande</option>
                                                                        <option value="511">Sandovalina</option>
                                                                        <option value="512">Santa Ad??lia</option>
                                                                        <option value="513">Santa Albertina</option>
                                                                        <option value="514">Santa B??rbara D??oeste</option>
                                                                        <option value="515">Santa Branca</option>
                                                                        <option value="516">Santa Clara D??oeste</option>
                                                                        <option value="517">Santa Cruz da Concei????o</option>
                                                                        <option value="518">Santa Cruz da Esperan??a</option>
                                                                        <option value="519">Santa Cruz Das Palmeiras</option>
                                                                        <option value="520">Santa Cruz do Rio Pardo</option>
                                                                        <option value="521">Santa Ernestina</option>
                                                                        <option value="522">Santa f?? do Sul</option>
                                                                        <option value="523">Santa Gertrudes</option>
                                                                        <option value="524">Santa Isabel</option>
                                                                        <option value="525">Santa L??cia</option>
                                                                        <option value="526">Santa Maria da Serra</option>
                                                                        <option value="527">Santa Mercedes</option>
                                                                        <option value="528">Santana da Ponte Pensa</option>
                                                                        <option value="529">Santana de Parna??ba</option>
                                                                        <option value="530">Santa Rita D??oeste</option>
                                                                        <option value="531">Santa Rita do Passa Quatro</option>
                                                                        <option value="532">Santa Rosa de Viterbo</option>
                                                                        <option value="533">Santa Salete</option>
                                                                        <option value="534">Santo Anast??cio</option>
                                                                        <option value="535">Santo Andr??</option>
                                                                        <option value="536">Santo Ant??nio da Alegria</option>
                                                                        <option value="537">Santo Ant??nio de Posse</option>
                                                                        <option value="538">Santo Ant??nio do Aracangu??</option>
                                                                        <option value="539">Santo Ant??nio do Jardim</option>
                                                                        <option value="540">Santo Ant??nio do Pinhal</option>
                                                                        <option value="541">Santo Expedito</option>
                                                                        <option value="542">Sant??polis do Aguape??</option>
                                                                        <option value="543">Santos</option>
                                                                        <option value="544">S??o Bento do Sapuca??</option>
                                                                        <option value="545">S??o Bernardo do Campo</option>
                                                                        <option value="546">S??o Caetano do Sul</option>
                                                                        <option value="547">S??o Carlos</option>
                                                                        <option value="548">S??o Francisco</option>
                                                                        <option value="549">S??o Jo??o da Boa Vista</option>
                                                                        <option value="550">S??o Jo??o Das Duas Pontes</option>
                                                                        <option value="551">S??o Jo??o de Iracema</option>
                                                                        <option value="552">S??o Jo??o do Pau D??alho</option>
                                                                        <option value="553">S??o Joaquim da Barra</option>
                                                                        <option value="554">S??o Jos?? da Bela Vista</option>
                                                                        <option value="555">S??o Jos?? do Barreiro</option>
                                                                        <option value="556">S??o Jos?? do Rio Pardo</option>
                                                                        <option value="557">S??o Jos?? do Rio Preto</option>
                                                                        <option value="558">S??o Jos?? Dos Campos</option>
                                                                        <option value="559">S??o Louren??o da Serra</option>
                                                                        <option value="560">S??o Lu??s do Paraitinga</option>
                                                                        <option value="561">S??o Manuel</option>
                                                                        <option value="562">S??o Miguel Arcanjo</option>
                                                                        <option value="563">S??o Paulo</option>
                                                                        <option value="564">S??o Pedro</option>
                                                                        <option value="565">S??o Pedro do Turvo</option>
                                                                        <option value="566">S??o Roque</option>
                                                                        <option value="567">S??o Sebasti??o</option>
                                                                        <option value="568">S??o Sebasti??o da Grama</option>
                                                                        <option value="569">S??o Sim??o</option>
                                                                        <option value="570">S??o Vicente</option>
                                                                        <option value="571">Sarapu??</option>
                                                                        <option value="572">Sarutai??</option>
                                                                        <option value="573">Sebastian??polis do Sul</option>
                                                                        <option value="574">Serra Azul</option>
                                                                        <option value="575">Serrana</option>
                                                                        <option value="576">Serra Negra</option>
                                                                        <option value="577">Sert??ozinho</option>
                                                                        <option value="578">Sete Barras</option>
                                                                        <option value="579">Sever??nia</option>
                                                                        <option value="580">Silveiras</option>
                                                                        <option value="581">Socorro</option>
                                                                        <option value="582">Sorocaba</option>
                                                                        <option value="583">Sud Mennucci</option>
                                                                        <option value="584">Sumar??</option>
                                                                        <option value="585">Suzano</option>
                                                                        <option value="586">Suzan??polis</option>
                                                                        <option value="587">Tabapu??</option>
                                                                        <option value="588">Tabatinga</option>
                                                                        <option value="589">Tabo??o da Serra</option>
                                                                        <option value="590">Taciba</option>
                                                                        <option value="591">Tagua??</option>
                                                                        <option value="592">Taia??u</option>
                                                                        <option value="593">Tai??va</option>
                                                                        <option value="594">Tamba??</option>
                                                                        <option value="595">Tanabi</option>
                                                                        <option value="596">Tapira??</option>
                                                                        <option value="597">Tapiratiba</option>
                                                                        <option value="598">Taquaral</option>
                                                                        <option value="599">Taquaritinga</option>
                                                                        <option value="600">Taquarituba</option>
                                                                        <option value="601">Taquariva??</option>
                                                                        <option value="602">Tarabai</option>
                                                                        <option value="603">Tarum??</option>
                                                                        <option value="604">Tatu??</option>
                                                                        <option value="605">Taubat??</option>
                                                                        <option value="606">Tejup??</option>
                                                                        <option value="607">Teodoro Sampaio</option>
                                                                        <option value="608">Terra Roxa</option>
                                                                        <option value="609">Tiet??</option>
                                                                        <option value="610">Timburi</option>
                                                                        <option value="611">Torre de Pedra</option>
                                                                        <option value="612">Torrinha</option>
                                                                        <option value="613">Trabiju</option>
                                                                        <option value="614">Trememb??</option>
                                                                        <option value="615">Tr??s Fronteiras</option>
                                                                        <option value="616">Tuiuti</option>
                                                                        <option value="617">Tup??</option>
                                                                        <option value="618">Tupi Paulista</option>
                                                                        <option value="619">Turi??ba</option>
                                                                        <option value="620">Turmalina</option>
                                                                        <option value="621">Ubarana</option>
                                                                        <option value="622">Ubatuba</option>
                                                                        <option value="623">Ubirajara</option>
                                                                        <option value="624">Uchoa</option>
                                                                        <option value="625">Uni??o Paulista</option>
                                                                        <option value="626">Ur??nia</option>
                                                                        <option value="627">Uru</option>
                                                                        <option value="628">Urup??s</option>
                                                                        <option value="629">Valentim Gentil</option>
                                                                        <option value="630">Valinhos</option>
                                                                        <option value="631">Valpara??so</option>
                                                                        <option value="632">Vargem</option>
                                                                        <option value="633">Vargem Grande do Sul</option>
                                                                        <option value="634">Vargem Grande Paulista</option>
                                                                        <option value="635">V??rzea Paulista</option>
                                                                        <option value="636">Vera Cruz</option>
                                                                        <option value="637">Vinhedo</option>
                                                                        <option value="638">Viradouro</option>
                                                                        <option value="639">Vista Alegre do Alto</option>
                                                                        <option value="640">Vit??ria Brasil</option>
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
                                                                <label class="col-form-label">Ano Fabrica????o</label>
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
