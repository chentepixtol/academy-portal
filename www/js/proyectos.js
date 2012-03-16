
var expander = new Ext.grid.RowExpander({
    tpl: new Ext.Template('<p><b>Asesor Titular:</b> {AsesorTitular}</p><br>', '<p><b>Tema:</b> {Tema}</p><br>', '<p><b>Descripción:</b> {Summary} </p>' )
});

var store = new Ext.data.Store({
    url: '/ajax/proyectos.xml',
    reader: new Ext.data.XmlReader({
        record: 'Item',
        totalRecords: '@total'
    }, ['AsesorTitular', 'Tema', 'Summary'])
});

var grid = new Ext.grid.GridPanel({
    store: store,
    plugins: expander,
    columns: [expander, {
        header: "Prof. Titular",
        width: 165,
        dataIndex: 'AsesorTitular',
        sortable: true
    }, {
        header: "Tema",
        width: 600,
        dataIndex: 'Tema',
        sortable: true
    }],
    renderTo: 'proyectos-grid',
    viewConfig: {
        forceFit: true
    },
  //  title: 'TEMAS PARA EL PROYECTO TERMINAL',
    width: 755,
    height: 450
});

store.load();
