/*
Template Name: Ample Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function () {
    "use strict";
    // ========================================================================
    // PRODUCTS YEARLY SALES Charts
    // ========================================================================

    var chart = new Chartist.Line('#ct-visits', {
         labels: ['2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015'],
         series: [
            [5, 2, 7, 4, 5, 3, 5, 4],
            [2, 5, 2, 6, 2, 5, 2, 4]
          ]
     }, {
        chartPadding: {
            top: 40,
            bottom: 20,
            left: 0,
            right: 0,
         },
         low: 1,
         showPoint: true,

         fullWidth: true,
         plugins: [
            Chartist.plugins.tooltip()
          ],
         axisY: {

             labelInterpolationFnc: function (value) {
                 return (value / 1) + 'k';
             }
         },
         showArea: true
     });

    chart.on('draw', function(ctx) {
        if (ctx.type === 'area') {
            ctx.element.attr({
                x1: ctx.x1 + 0.001
            });
        }
    });
    // ========================================================================
    // Week Sales Chart
    // ========================================================================

    new Chartist.Bar('#ct-daily-sales', {
         labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
         series: [
            [5, 4, 3, 6, 5, 2, 3]

          ]
        }, {
         axisX: {
             showLabel: false,
             showGrid: false,
             // On the x-axis start means top and end means bottom
             position: 'start'
         },

         chartPadding: {
             top: 20,
             left: 45,
         },
         axisY: {
             showLabel: false,
             showGrid: false,
             // On the y-axis start means left and end means right
             position: 'end'
         },
         height: 309,
         plugins: [
            Chartist.plugins.tooltip()
          ]
    });

    // ========================================================================
    // Sunday
    // ========================================================================

    Morris.Area({
        element: 'morris-area-chart2',
        data: [{
                 period: '2010',
                 SiteA: 50,
                 SiteB: 0,
            }, {
                 period: '2011',
                 SiteA: 160,
                 SiteB: 100,
            }, {
                 period: '2012',
                 SiteA: 110,
                 SiteB: 60,
            }, {
                 period: '2013',
                 SiteA: 60,
                 SiteB: 200,
            }, {
                 period: '2014',
                 SiteA: 130,
                 SiteB: 150,
            }, {
                 period: '2015',
                 SiteA: 200,
                 SiteB: 90,
            }
            , {
                 period: '2016',
                 SiteA: 100,
                 SiteB: 150,
            }],
             xkey: 'period',
             ykeys: ['SiteA', 'SiteB'],
             labels: ['Site A', 'Site B'],
             pointSize: 0,
             fillOpacity: 0.1,
             pointStrokeColors: ['#79e580', '#2cabe3'],
             behaveLikeLine: true,
             gridLineColor: '#ffffff',
             lineWidth: 2,
             smooth: true,
             hideHover: 'auto',
             lineColors: ['#79e580', '#2cabe3'],
             resize: true
    });

    // ========================================================================
    // Minimal Demo Dashboard Init Js
    // ========================================================================

    // 1) First 4 Card Charts
    var sparklineLogin = function () {
        $('#sparklinedash').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            resize: true,
            barSpacing: '5',
            barColor: '#53e69d'
        });
        $('#sparklinedash2').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            resize: true,
            barSpacing: '5',
            barColor: '#7460ee'
        });
        $('#sparklinedash3').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            resize: true,
            barSpacing: '5',
            barColor: '#11a0f8'
        });
        $('#sparklinedash4').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            resize: true,
            barSpacing: '5',
            barColor: '#ff7676'
        });
    }
    var sparkResize;
    $(window).on("resize", function (e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();
});