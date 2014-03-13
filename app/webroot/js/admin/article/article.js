$(function(){

KindEditor.ready(function(K){
    K.create('#ArticleContent', {
        allowFileManager: true,
        height: 500,
        minHeight: 300,
        filterMode: false
    });
});

$('#ArticlePublicDate').datepicker({
    howOn : 'both',
    showButtonPanel: true,
    numberOfMonths: 3
});

});