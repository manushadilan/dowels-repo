function HTMLtoPDF(){
var pdfsize = 'a4';
  var pdf = new jsPDF('l', 'pt', pdfsize);

  var res = pdf.autoTableHtmlToJson(document.getElementById("table"));
  pdf.autoTable(res.columns, res.data, {
    startY: 60,
    styles: {
      overflow: 'linebreak',
      columnWidth: 'wrap'
    },
    columnStyles: {
      1: {columnWidth: 'auto'}
    }
  });

  pdf.save("Report.pdf");
}