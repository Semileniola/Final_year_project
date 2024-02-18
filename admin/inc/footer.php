    <div class="footer">
                            </div>
        </div>
    </div>

    <script>
        let baseUrl = "https://www.bidout-app.egenslab.com"
    </script>

    <script src="Dashboard_files/jquery-3.7.1.min.js"></script>
    <script src="Dashboard_files/jquery-ui.js"></script>
    <script src="Dashboard_files/bootstrap.bundle.min.js"></script>
    <script src="Dashboard_files/toastr.min.js"></script>
    <script src="Dashboard_files/summernote-lite.min.js"></script>
    <script src="Dashboard_files/fontawesome.min.js"></script>
    <script src="Dashboard_files/select2.min.js"></script>
    <script src="Dashboard_files/cute-alert.js"></script>
    <script src="Dashboard_files/sweetalert.min.js"></script>
    <script src="Dashboard_files/jquery-ui-timepicker-addon.min.js"></script>
    <script src="Dashboard_files/html2pdf.bundle.min.js"></script>
    <script src="Dashboard_files/dropzone.min.js"></script>
    <!-- bootstrap color picker -->
    <script src="Dashboard_files/bootstrap-colorpicker.min.js"></script>
    <script src="Dashboard_files/bootstrap-tagsinput.min.js"></script>
    <script src="Dashboard_files/main.js"></script>
    <script src="Dashboard_files/egns.js"></script>
              <script src="Dashboard_files/chart.js"></script>



     <script>
    let settingProductDate = ["03 January 2024","11 December 2023"];
    let purchaseOrderDate = [""];
    let orderSummeryDate = ["01 February 2024","07 January 2024","08 January 2024","09 January 2024","11 January 2024","12 January 2024","14 January 2024","18 January 2024","24 January 2024","27 January 2024","30 January 2024"];
    let orderSummeryQty = ["580","1","102","272","6","2200","152","304","581","1160","44"];
    let customerDate = ["01 February 2024","07 January 2024","11 December 2023","12 December 2023","29 January 2024","30 January 2024","31 January 2024"];
    let merchantTotal = ["1","2","1","1","1"];
    let customerTotal = ["1","1","1","2","1","3","1"];

    let widthdrawMonth = [""];
    let depositMonth = ["January 2024"];
    let bidOrderAmount = [""];

    (function($) {
        "use strict";

        const order_summery = document.getElementById('order_summery');
        const order_auction_direct_product = document.getElementById('order_auction_direct_product');

        const customer_merchant = document.getElementById('customer_merchant');
        const disposit_widthdraw = document.getElementById('disposit_widthdraw');

        const product_selling = document.getElementById('product_selling');

        //================== order summery js configuar start

        const orderdata = {
            labels: orderSummeryDate,
            datasets: [{
                label: 'Order Summery',
                data: orderSummeryQty,
                borderColor: 'rgba(54, 162, 235,1)',
                backgroundColor: 'rgba(54, 162, 235,0.5)',
                pointStyle: 'circle',
                pointRadius: 10,
                pointHoverRadius: 15
            }]
        };

        const orderconfig = {
            type: 'line',
            data: orderdata,
            options: {
                responsive: true,

            }
        };

        new Chart(order_summery, orderconfig);

        //================== order summery js configuar end

        //================== auction and direct chart js configuar start


        const auctionDirectData = {
            labels: purchaseOrderDate,
            datasets: [{
                    label: 'Auction Sale',
                    data:bidOrderAmount,
                    borderColor: 'rgba(255, 99, 132,1)',
                    backgroundColor: 'rgba(255, 99, 132,0.5)',
                },
                {
                    label: 'Direct Sale',
                    data: [],
                    borderColor: 'rgba(54, 162, 235,1)',
                    backgroundColor: 'rgba(54, 162, 235,0.5)',
                }
            ]
        };

        const auctionDirectConfig = {
            type: 'line',
            data: auctionDirectData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },

                }
            },
        };

        new Chart(order_auction_direct_product, auctionDirectConfig);

        //================== auction and direct chart js configuar end

        const datad = {
            labels: settingProductDate,
            datasets: [{
                label: 'Product Sale',
                data: [1,3],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
            }]
        };

        const config = {
            type: 'line',
            data: datad,
            options: {
                animations: {
                    tension: {
                        duration: 1000,
                        easing: 'linear',
                        from: 1,
                        to: 0,
                        loop: true
                    }
                },
                scales: {
                    y: { // defining min and max so hiding the dataset does not change scale range
                        min: 0,
                        max: 100
                    }
                }
            }
        };


        new Chart(product_selling, config);


        //================== customer and merchant chart js configuar start

        const customerMerchants = {
            labels: customerDate,
            datasets: [{
                    label: 'Merchants',
                    data: merchantTotal,
                    borderColor: 'rgba(54, 162, 235,1)',
                    backgroundColor: 'rgba(54, 162, 235,0.5)',
                    stack: 'combined',
                    type: 'bar'
                },
                {
                    label: 'Customers',
                    data: merchantTotal,
                    borderColor: 'rgba(255, 99, 132,1)',
                    backgroundColor: 'rgba(255, 99, 132,0.5)',
                    stack: 'combined'
                }
            ]
        };


        const customerMerchantsConfig = {
            type: 'line',
            data: customerMerchants,
            options: {

                scales: {
                    y: {
                        stacked: true
                    }
                }
            },
        };

        new Chart(customer_merchant, customerMerchantsConfig);


        //================== customer and merchant chart js configuar end


        //================== deposit and widthdraw chart js configuar start

        const depostiWidthdrawData = {
            labels: depositMonth,
            datasets: [{
                    label: 'Deposit',
                    data: [4700],
                    borderColor: 'rgb(75, 192, 192)',
                },
                {
                    label: 'Widthdraw ',
                    data: [],
                    borderColor: 'rgba(255, 99, 132,1)',
                }
            ]
        };

        const depostiWidthdrawConfig = {
            type: 'line',
            data: depostiWidthdrawData,
            options: {
                responsive: true,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                stacked: false,

                scales: {
                    y: {
                        type: 'linear',
                        display: true,
                        position: 'left',
                    },
                    y1: {
                        type: 'linear',
                        display: true,
                        position: 'right',

                        // grid line settings
                        grid: {
                            drawOnChartArea: false, // only want the grid lines for one axis to show up
                        },
                    },
                }
            },
        };

        new Chart(disposit_widthdraw, depostiWidthdrawConfig);

        //================== deposit and widthdraw chart js configuar end

    })(jQuery);
</script>
 
    <script>
        
                    </script>




</body></html>