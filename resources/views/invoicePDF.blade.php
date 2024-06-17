<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<style>
    @import url(https://fonts.bunny.net/css?family=alata:400);

    body {
        background-color: #f3f4f6;
        font-family: "Alata", sans-serif;
    }
</style>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    <div class="max-w-3xl mx-auto p-6 bg-white rounded shadow-sm my-6" id="invoice">
        <div class="grid grid-cols-2 items-center">
            <div>
                <!--  Company logo  -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg" alt="company-logo" height="100" width="100">
            </div>

            <div class="text-right">
                <p>
                    Tailwind Inc.
                </p>
                <p class="text-gray-500 text-sm">
                    sales@tailwindcss.com
                </p>
                <p class="text-gray-500 text-sm mt-1">
                    +41-442341232
                </p>
                <p class="text-gray-500 text-sm mt-1">
                    VAT: 8657671212
                </p>
            </div>
        </div>

        <!-- Client info -->
        <div class="grid grid-cols-2 items-center mt-8">
            <div>
                <p class="font-bold text-gray-800">
                    Bill to :
                </p>
                <p class="text-gray-500">
                    Laravel LLC.
                    <br />
                    102, San-Fransico, CA, USA
                </p>
                <p class="text-gray-500">
                    info@laravel.com
                </p>
            </div>

            <div class="text-right">
                <p class="">
                    Invoice number:
                    <span class="text-gray-500">INV-2023786123</span>
                </p>
                <p>
                    Invoice date: <span class="text-gray-500">03/07/2023</span>
                    <br />
                    Due date:<span class="text-gray-500">31/07/2023</span>
                </p>
            </div>
        </div>

        <!-- Invoice Items -->
        <div class="-mx-4 mt-8 flow-root sm:mx-0">
            <table class="min-w-full">
                <colgroup>
                    <col class="w-full sm:w-1/2">
                    <col class="sm:w-1/6">
                    <col class="sm:w-1/6">
                    <col class="sm:w-1/6">
                </colgroup>
                <thead class="border-b border-gray-300 text-gray-900">
                    <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Items</th>
                        <th scope="col" class="hidden px-3 py-3.5 text-right text-sm font-semibold text-gray-900 sm:table-cell">Quantity</th>
                        <th scope="col" class="hidden px-3 py-3.5 text-right text-sm font-semibold text-gray-900 sm:table-cell">Price</th>
                        <th scope="col" class="py-3.5 pl-3 pr-4 text-right text-sm font-semibold text-gray-900 sm:pr-0">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200">
                        <td class="max-w-0 py-5 pl-4 pr-3 text-sm sm:pl-0">
                            <div class="font-medium text-gray-900">E-commerce Platform</div>
                            <div class="mt-1 truncate text-gray-500">Laravel based e-commerce platform.</div>
                        </td>
                        <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">500.0</td>
                        <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">$100.00</td>
                        <td class="py-5 pl-3 pr-4 text-right text-sm text-gray-500 sm:pr-0">$5,000.00</td>
                    </tr>

                    <tr class="border-b border-gray-200">
                        <td class="max-w-0 py-5 pl-4 pr-3 text-sm sm:pl-0">
                            <div class="font-medium text-gray-900">Frontend Design</div>
                            <div class="mt-1 truncate text-gray-500">Frontend design using Vue.js and Tailwind CSS.</div>
                        </td>
                        <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">500.0</td>
                        <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">$100.00</td>
                        <td class="py-5 pl-3 pr-4 text-right text-sm text-gray-500 sm:pr-0">$5,000.00</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="max-w-0 py-5 pl-4 pr-3 text-sm sm:pl-0">
                            <div class="font-medium text-gray-900">Shop SEO</div>
                            <div class="mt-1 truncate text-gray-500">Website SEO and Social Media marketing.</div>
                        </td>
                        <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">50.0</td>
                        <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">$100.00</td>
                        <td class="py-5 pl-3 pr-4 text-right text-sm text-gray-500 sm:pr-0">$500.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row" colspan="3" class="hidden pl-4 pr-3 pt-6 text-right text-sm font-normal text-gray-500 sm:table-cell sm:pl-0">Subtotal</th>
                        <th scope="row" class="pl-6 pr-3 pt-6 text-left text-sm font-normal text-gray-500 sm:hidden">Subtotal</th>
                        <td class="pl-3 pr-6 pt-6 text-right text-sm text-gray-500 sm:pr-0">$10,500.00</td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="3" class="hidden pl-4 pr-3 pt-4 text-right text-sm font-normal text-gray-500 sm:table-cell sm:pl-0">Tax</th>
                        <th scope="row" class="pl-6 pr-3 pt-4 text-left text-sm font-normal text-gray-500 sm:hidden">Tax</th>
                        <td class="pl-3 pr-6 pt-4 text-right text-sm text-gray-500 sm:pr-0">$1,050.00</td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="3" class="hidden pl-4 pr-3 pt-4 text-right text-sm font-normal text-gray-500 sm:table-cell sm:pl-0">Discount</th>
                        <th scope="row" class="pl-6 pr-3 pt-4 text-left text-sm font-normal text-gray-500 sm:hidden">Discount</th>
                        <td class="pl-3 pr-6 pt-4 text-right text-sm text-gray-500 sm:pr-0">- 10%</td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="3" class="hidden pl-4 pr-3 pt-4 text-right text-sm font-semibold text-gray-900 sm:table-cell sm:pl-0">Total</th>
                        <th scope="row" class="pl-6 pr-3 pt-4 text-left text-sm font-semibold text-gray-900 sm:hidden">Total</th>
                        <td class="pl-3 pr-4 pt-4 text-right text-sm font-semibold text-gray-900 sm:pr-0">$11,550.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!--  Footer  -->
        <div class="border-t-2 pt-4 text-xs text-gray-500 text-center mt-16">
            Please pay the invoice before the due date. You can pay the invoice by logging in to your account from our client portal.
        </div>
    </div>
</body>
<!-- <button type="button" id="btn" class="">Print</button> -->

</html>