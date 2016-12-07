/**
 * Created by Bram on 7-12-2016.
 */
document.onreadystatechange = function () {
    if (document.readyState === 'complete') {
        drawChart();
        drawChartTwo();
        document.querySelector('.amcommercetools_almostoutofstockproducts .submit').addEventListener('click', function() {
            setTimeout(function() {
                drawChart();
                drawChartTwo();
            }, 1000);
        }, false);
    }
};