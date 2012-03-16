/**
 * @author chente
 */
Ext.onReady(function(){
    var menulink = new Ext.Panel({
        title: 'Links',
        contentEl: 'menuLinks'
    });
	
	var menulink3 = new Ext.Panel({
		title: 'Desarrolladores',
		contentEl: 'menuDesarrolladores'
	});
  
  
    var item1 = new Ext.Panel({
        title: 'Curricula',
        contentEl: 'menuCurricula'
    });
    
    var item2 = new Ext.Panel({
        title: 'Proyectos',
        contentEl: 'menuProyectos'
    });
    
	var item3 = new Ext.Panel({
		title: 'Materias',
		autoScroll: true,
		autoLoad: {
			url: '/ajax/materias'
		}
	})
    
    var item4 = new Ext.Panel({
        title: 'Sitios de Profesores',
        autoLoad:{
			url: '/ajax/sitios'
		}
    });
    
    var item5 = new Ext.Panel({
        title: 'Material de Apoyo',
        contentEl: 'menuMaterial'
    });
    
	var item6 = new Ext.Panel({
		title: 'Informacion de Profesores',
		autoLoad: {
			url: '/ajax/info'
		}
	});
	
	
    var accordion = new Ext.Panel({
        region: 'west',
        margins: '110 0 0 100',
        title: 'Menu Principal',
        split: true,
        collapsible: false,
        width: 190,
        layout: 'accordion',
        layoutConfig: {
            animate: true,
            hideCollapseTool: true
        },
        defaults: {
            bodyStyle: 'background-image: url(/images/navbg.jpg);'
        },
        items: [item1, item2, item3, item4, item6, item5]
    });
    
    var accordion2 = new Ext.Panel({
        region: 'east',
        width: 170,
        minSize: 175,
        maxSize: 400,
        collapsible: true,
        collapsed: true,
		hideCollapseTool: false,
		title: 'Otros',
		titleCollapse: false,
        margins: '110 100 0 0',
        cmargins:'110 100 0 0',
        layout: 'accordion',
        layoutConfig: {
            animate: true
        },
		defaults: {
            bodyStyle: 'background-image: url(/images/navbg.jpg);'
        },
        items: [ menulink, menulink3 ]
    });
    
	var vieport = new Ext.Viewport({
        layout: 'border',
        items: [accordion, accordion2, centro]
    });
    
   // setTimeout(function(){
        Ext.get('loading2').remove();
        Ext.get('loading-mask2').fadeOut({
            endOpacity: 0.3,
            remove: true,
            duration: 0.3
        });
   // }, 200);
    
});
