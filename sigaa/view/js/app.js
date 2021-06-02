// Event ensino
function ensino(){
    var menu = document.querySelector(".submenu-ensino");
    var arrow = document.querySelector("#ensino")
    var link = document.querySelector("#ensino")
    link.classList.toggle("border")
    arrow.classList.toggle("link-nav-arrow-2")
    menu.classList.toggle('submenu-show')
}

function cons(){
    var menu = document.querySelector(".con-geral")
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#cons")
    arrow.classList.toggle("link-nav-arrow-2")
}

// End event ensino


// Event pesquisa
function pesquisa(){
    var menu = document.querySelector(".submenu-pesquisa");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#pesquisa")
    arrow.classList.toggle("link-nav-arrow-2")
    var link = document.querySelector("#pesquisa")
    link.classList.toggle("border")
}

function proj_pesq(){
    var menu = document.querySelector(".proj_pesq");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#proj_pesq")
    arrow.classList.toggle("link-nav-arrow-2")
}

function plan_trab(){
    var menu = document.querySelector(".plan_trab");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#plan_trab")
    arrow.classList.toggle("link-nav-arrow-2")
}

function relat_ini(){
    var menu = document.querySelector(".relat_ini");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#relat_ini")
    arrow.classList.toggle("link-nav-arrow-2")
}

function relat_parc(){
    var menu = document.querySelector(".relat_parc");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#relat_parc")
    arrow.classList.toggle("link-nav-arrow-2")
}

function relat_fin(){
    var menu = document.querySelector(".relat_fin");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#relat_fin")
    arrow.classList.toggle("link-nav-arrow-2")
}

function cert_decl(){
    var menu = document.querySelector(".cert_decl");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#cert_decl")
    arrow.classList.toggle("link-nav-arrow-2")
}

function cong_ini(){
    var menu = document.querySelector(".cong_ini");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#cong_ini")
    arrow.classList.toggle("link-nav-arrow-2")
}

// End event pesquisa

// Event extensão
function extensao(){
    var menu = document.querySelector(".submenu-extensao");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#extensao")
    arrow.classList.toggle("link-nav-arrow-2")
    var link = document.querySelector("#extensao")
    link.classList.toggle("border")
}
// End event extensão

// Event extensão
function acoes(){
    var menu = document.querySelector(".submenu-acoes");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#acoes")
    arrow.classList.toggle("link-nav-arrow-2")
    var link = document.querySelector("#acoes")
    link.classList.toggle("border")
}
// End event extensão

// Event bolsas
function bolsas(){
    var menu = document.querySelector(".submenu-bolsa");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#bolsas")
    arrow.classList.toggle("link-nav-arrow-2")
    var link = document.querySelector("#bolsas")
    link.classList.toggle("border")
}

function decl_bolsista(){
    var menu = document.querySelector(".decl_bolsista");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#decl_bolsista")
    arrow.classList.toggle("link-nav-arrow-2")
}

function solic_bolsa(){
    var menu = document.querySelector(".solic_bolsa");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#solic_bolsa")
    arrow.classList.toggle("link-nav-arrow-2")
}
// End event bolsas

// Event extensão
function estagio(){
    var menu = document.querySelector(".submenu-estagio");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#estagio")
    arrow.classList.toggle("link-nav-arrow-2")
    var link = document.querySelector("#estagio")
    link.classList.toggle("border")
}
// End event extensão

// Event extensão
function outros(){
    var menu = document.querySelector(".submenu-outros");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#outros")
    arrow.classList.toggle("link-nav-arrow-2")
    var link = document.querySelector("#outros")
    link.classList.toggle("border")
}

function amb_virt(){
    var menu = document.querySelector(".amb_virt");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#amb_virt")
    arrow.classList.toggle("link-nav-arrow-2")
}

function com_vir(){
    var menu = document.querySelector(".com_vir");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#com_vir")
    arrow.classList.toggle("link-nav-arrow-2")
}

function cord_curs(){
    var menu = document.querySelector(".cord_curs");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#cord_curs")
    arrow.classList.toggle("link-nav-arrow-2")
}

function ouvidoria(){
    var menu = document.querySelector(".ouvidoria");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#ouvidoria")
    arrow.classList.toggle("link-nav-arrow-2")
}

function prod_int(){
    var menu = document.querySelector(".prod_int");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#prod_int")
    arrow.classList.toggle("link-nav-arrow-2")
}

function escrit_ideias(){
    var menu = document.querySelector(".escrit_ideias");
    menu.classList.toggle('submenu-show')
    var arrow = document.querySelector("#escrit_ideias")
    arrow.classList.toggle("link-nav-arrow-2")
}

// End event extensão


window.addEventListener("load", function(){

    var iconMenu = document.querySelector("#menu-hamb");
    
 
    iconMenu.addEventListener("click", function(){
       var menu_vert = document.querySelector(".container-menu");
       var nav = document.querySelector(".menu")
       var menu_ho = document.querySelector(".menu-ho")
       nav.classList.toggle('pointer'); 
       menu_vert.classList.toggle('menu__move');

 
    });

    var close= document.querySelector("#fechar")
    
    close.addEventListener("click", function(){
       var close = document.querySelector(".semestre")
       close.classList.toggle('close-calendario');
    });

    var close= document.querySelector("#minimizar")
    
    close.addEventListener("click", function(){
       var close = document.querySelector(".semestre")
       close.classList.toggle('close-calendario');
    });
});
