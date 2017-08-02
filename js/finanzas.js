var dom = document.getElementById("container1");
var myChart = echarts.init(dom);
var app = {};
option = null;
option = {
    title: {
        text: 'Gastos diarios'        
    },
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            type: 'cross',
            label: {
                normal: {
                  textStyle: {
                      color: 'rgba(2, 25, 255, 0.3)'
                  }
              }
            },
            labelLine: {
                normal: {
                    lineStyle: {
                        color: 'rgba(25, 20, 55, 0.3)'
                    }
                }
            }

        }
    },
    legend: {
        data:['a', 'b']
    },
    toolbox: {
        show: true,
        feature: {
            dataView: {readOnly: false},
            restore: {},
            saveAsImage: {}
        }
    },
    dataZoom: {
        show: false,
        start: 0,
        end: 100
    },
    xAxis: [
        {
            type: 'category',
            boundaryGap: true,
            data: ["20/09/2012","21/09/2012","22/09/2012","23/09/2012","24/09/2012","25/09/20"]
            // data: (function (){
            //     var now = new Date();
            //     var res = [];
            //     var len = 10;
            //     while (len--) {
            //         res.unshift(now.toLocaleTimeString().replace(/^\D*/,''));
            //         now = new Date(now - 2000);
            //     }
            //     return res;
            // })()
        },
        {
            type: 'category',
            boundaryGap: true,
            data: ["","","","","",""],

            // data: (function (){
            //     // var res = [];
            //     // var len = 10;
            //     // while (len--) {
            //     //     res.push(len + 1);
            //     // }
            //     // return res;
            // })
            // ()
        }
    ],
    yAxis: [
        {
            type: 'value',
            scale: false,
            name: '',
            max: 100000,
            min: 0,
            boundaryGap: [0.2, 0.2]
        },
        {
            type: 'value',
            scale: true,
            name: '',
            max: 100000,
            min: 0,
            // boundaryGap: [0.2, 0.2]
        }
    ],
    // datos para las barras
    series: [
        { 
          // datos barra
            name:'Gasto diario',
            type:'bar',
            xAxisIndex: 1,
            yAxisIndex: 1,           

             data: ["88830","75821","80422","75923","80524","84725"],
             itemStyle: {
                    normal: {
                        color: '#76bddf'
                    }
                }
        },
        {
            name:'?',
            type:'line',
            data: ["50015","70020","80822","65520","70022","90025"]
        }
    ]
    

};

app.count = 11;
setInterval(function (){
//     axisData = (new Date()).toLocaleTimeString().replace(/^\D*/,'');

//     var data0 = option.series[0].data;
//     var data1 = option.series[1].data;
//     data0.shift();
//     data0.push(Math.round(Math.random() * 1000));
//     data1.shift();
//     data1.push((Math.random() * 10 + 5).toFixed(1) - 0);

//     option.xAxis[0].data.shift();
//     option.xAxis[0].data.push(axisData);
//     option.xAxis[1].data.shift();
//     option.xAxis[1].data.push(app.count++);

    myChart.setOption(option);
}, 2100);
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}