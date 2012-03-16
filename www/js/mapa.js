Ext.onReady(function(){

var tree = new Ext.tree.TreePanel({
    el: 'tree',
    animate: true,
    autoScroll: true,
    loader: new Ext.tree.TreeLoader({
        dataUrl: '/js/mapacurricular.json'
    }),

    containerScroll: true
});

//      new Tree.TreeSorter(tree, {folderSort:true});


var root = new Ext.tree.AsyncTreeNode({
    text: 'Mapa Curricular'
});

tree.setRootNode(root);

tree.render();

root.expand(false, false);

tree.on('click', llamar);

	
});

function llamar(node){
    if (node.isLeaf()){
		var FileName = '../xhtml/programas/prog' + node.id + '.html';
		async('contenidoTree', FileName);
	}       
}

function async(container, dirurl){
    Ext.get(container).load({
        url: dirurl,
        scripts: true,
        text: "Cargando Elemento..."
    });
}


