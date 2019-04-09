/*
Template Name: Ample Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function () {
    "use strict";
    
    // ========================================================================
    // Expance Charts
    // ========================================================================
    var sparklineLogin = function() {
        $("#spark1").sparkline([2, 4, 4, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#ff7676',
            fillColor: '#ff7676',
            maxSpotColor: '#ff7676',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#ff7676'
        });
        $("#spark2").sparkline([0, 2, 8, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#2cabe3',
            fillColor: '#2cabe3',
            minSpotColor: '#2cabe3',
            maxSpotColor: '#2cabe3',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#2cabe3'
        });
    }
    var sparkResize;
    $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();

    // ========================================================================
    // ct-weather
    // ========================================================================
    var chart1 = new Chartist.Line('#ct-city-wth', {
        labels: ['12AM', '2AM', '6AM', '9AM', '12AM', '3PM', '6PM', '9PM'],
        series: [[5, 2, 7, 4, 5, 3, 5, 4]]
    }, {
        chartPadding: {
            left: -20,
            top: 25,
        },
        low: 1,
        showPoint: true,
        height: 210,
        fullWidth: true,
        plugins: [
            Chartist.plugins.tooltip()
          ],
        axisX: {
            showLabel: true,
            showGrid: false
        },
        axisY: {
            showLabel: false,
            showGrid: false
        },
        showArea: true
    });
    chart1.on('draw', function(ctx) {
        if (ctx.type === 'area') {
            ctx.element.attr({
                x1: ctx.x1 + 0.001
            });
        }
    });
});