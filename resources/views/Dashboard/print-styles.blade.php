<style>
        .logo-blue {
            display: none;
        }

        @media print {

            @if (App::getLocale() == 'en')
            #print_Button {
                display: none;
            }

            .invoice-title {
                display: block;
                text-align: center;
            }

            .tx-center {
                display: flex;
                align-items: center;
                text-align: center;
                column-gap: 10px;
            }

            .table, td, th, tr {
                border: solid black;
            }

            .table {
                width: 100%;
            }

            .logo-blue {
                position: fixed;
                background-color: green;
                right: 0px;
                width: 150px; /* Adjust the width as needed */
                height: 100px; /* Adjust the height as needed */
                display: block;
            }
        @elseif((App::getLocale() == 'ar'))
         #print_Button {
            display: none;
        }

            .invoice-title {
                display: block;
                text-align: center;
            }

            .tx-center {
                display: flex;
                align-items: center;
                text-align: center;
                column-gap: 10px;
            }

            .table, td, th, tr {
                border: solid black;
            }

            .table {
                margin-top: 100px;
                width: 100%;
            }

            .logo-blue {
                position: fixed;
                right: 0px;
                width: 150px; /* Adjust the width as needed */
                height: 100px; /* Adjust the height as needed */
                display: block;
            }

          .billed-from {
              position: fixed;
              display: block;
              right: 0px;
              align-content: revert;
              margin-top: 50px;
          }

        @endif
}

</style>

