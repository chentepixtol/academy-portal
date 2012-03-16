/**
 * @author chente
 */

function async(container, dirurl){
    Ext.get(container).load({
        url: dirurl,
        scripts: true,
        text: "Cargando Elemento..."
    });
}

function abrirCentro(dirurl){
    centroItem.show();
    Ext.get('centro').load({
        url: dirurl,
        scripts: true,
        text: "Cargando Elemento..."
    });
}

function nuevoTab(dirurl, titulo){
    centro.add({
        title: titulo,
        id: titulo + 'Tab',
        autoLoad: {
            url: dirurl,
            scripts: true
        },
        closable: true
    }).show();
}

function abrirTab(dirurl, titulo){
    var elementoTab = centro.findById(titulo + 'Tab');
    if (elementoTab == null) 
        nuevoTab(dirurl, titulo);
    else 
        elementoTab.show();
}

var centroItem = new Ext.Panel({
    title: 'Principal',
    contentEl: 'centro',
    closable: false
});

var centro = new Ext.TabPanel({
    region: 'center',
    contentEl: 'tabs',
    margins: '110 5 0 0',
    activeTab: 0,
    enableTabScroll: true,
    defaults: {
        autoScroll: true,
        bodyStyle: 'background: #FFF url(/images/centro2.png) 0 0 repeat-x',
        closable: false
    },
    items: [centroItem]
});

function abrirVentana(url, boton){
    win = new Ext.Window({
        // layout: 'fit',
        width: 640,
        height: 480,
        actionClose: 'destroy',
        autoScroll: true,
        autoLoad: {
            url: url,
            scripts: true
        },
        buttons: [{
            text: 'Cerrar',
            handler: function(){
                win.hide();
                win.destroy();
            }
        }]
    });
    win.setTitle(boton.title);
    win.show(boton);
}

function openWindow(url){
    window.open(url, "", "width=780,height=480,top=0,left=0,ScrollBars = No");
}

function openWindow2(url){
    window.open(url, "", "width=600,height=600,top=0,left=0,ScrollBars = No");
}

var theme = true;
function cambiaTheme()
{
	if(theme == true)
		Ext.util.CSS.swapStyleSheet("theme","");
	else
		Ext.util.CSS.swapStyleSheet("theme","/js/ext/resources/css/xtheme-gray.css")
	theme = !theme;
}

window.onload = function() {
    var links = document.getElementsByTagName('a');
    for (var i=0;i < links.length;i++) {
        if (links[i].className == 'external') {
            links[i].onclick = function() {
                window.open(this.href);
                return false;
            };
        }
    }
};
