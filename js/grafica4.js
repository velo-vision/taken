angular.module("app", ["chart.js"]).controller("BaseCtrl", function($scope) {

  $scope.labels = ["lorem ipsum", "lorem ipsum", "lorem ipsum", "lorem ipsum", "lorem ipsum"];

  $scope.data = [[20000, 30000, 20000, 23000, 21000, 34000, 40000], [30000, 33000, 20000, 23000, 28000, 29000, 20000]];

  $scope.series = ["First", "Second"];

  $scope.datasetOverride = [{ yAxisID: "y-axis-1" }, { yAxisID: "y-axis-2" }];

  $scope.options = {
    legend: { display: true },
    elements: {
      line: {
        tension: 0.3,
      }
    },
    title: {
      display: true,
      text: "Testing Toggle",
      fontSize: 20
    },
    scales: {
      yAxes: [
        {
          id: "y-axis-1",
          type: "linear",
          display: true,
          position: "left"
        },
        {
          id: "y-axis-2",
          type: "linear",
          display: true,
          position: "right"
        }
      ]
    }
  };

  $scope.type = "line";

  $scope.toggle = function() {
    $scope.type = $scope.type === "line" ? "bar" : "line";
  };
});
