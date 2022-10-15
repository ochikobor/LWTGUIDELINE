//loading()で任意のスプレッドシートのデータを格納します。
function loading() {
    var ss = SpreadsheetApp.openById("スプレッドシートID");
    var listss = ss.getSheetByName("シート名");
    //最終行を調べる
    var lastrow = listss.getLastRow();
    //シートの大きさによって違いますがここでは2行1列目最終行3列目までを二次元配列に入れています。
    var list = listss.getRange(2, 1, lastrow-1, 3).getValues();

    return list;
}

function doGet() {
    var html = HtmlService.createTemplateFromFile('form');
    return html.evaluate();
}