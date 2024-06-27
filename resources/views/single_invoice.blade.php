
    <table>
        <thead>
            <tr>
                <th align="center" style="color:#2C71DE;"><b>Invoice Date</b></th>
                <th align="center" style="color:#2C71DE;"><b>Invoice Number</b></th>
                <th align="center" style="color:#2C71DE;"><b>Due Date</b></th>
            </tr>
            <tr>
                <th align="center"  >{{ $created_date }}</th>
                <th align="center" >{{ $invoice_number }}</th>
                <th align="center" >{{ $due_date }}</th>
            </tr>
        </thead>
    </table>

    <table>
        <thead>
            <tr>
                <th style="color:#2C71DE;"><b>CREATED BY</b></th>
            </tr>
            <tr>
                <td>{{ $createdby_name }}</td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <th style="color:#2C71DE;"><b>BILL TO</b></th>
            </tr>
            <tr>
                <td>
                {{ $customer_name }}
                </td>
            <tr>
                <td align="left">
                {{ $customer_phone }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                {{ $customer_address }}
                </td>
            </tr>
        </thead>
    </table>

    <table class="table-items">
        <thead>
            <tr>
                <th style="color:#2C71DE;"><b>ITEMS/SERVICES</b></th>
                <th style="color:#2C71DE;" align="center"><b>QUANTITY</b></th>
                <th style="color:#2C71DE;" align="right"><b>RATE PER</b></th>
                <th style="color:#2C71DE;" align="right"><b>DISC.</b></th>
                <th style="color:#2C71DE;" align="right"><b>AMOUNT</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderItems as $item)
            <tr>
                <td>
                    {{ $item['category_name'] }}<br>{{ $item['design_name'] }}
                </td>
                <td align="center">{{ $item['quantity'] }}({{ $item['unit'] }})</td>
                <td align="right">{{ $item['rate_per'] }}/-</td>
                <td align="right">{{ $item['discount_amount'] }}<br>({{ $item['discount_percentage'] }})</td>
                <td align="right">{{ $item['total'] }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3" style="border-top:2px solid #2C71DE; border-bottom:2px solid #2C71DE;color:#2C71DE;"><b>SUBTOTAL</b></td>
                <td align="right" style="border-top:2px solid #2C71DE; border-bottom:2px solid #2C71DE;"><b>₹ {{ $discount_amount }}</b></td>
                <td align="right" style="border-top:2px solid #2C71DE; border-bottom:2px solid #2C71DE;"><b>₹ {{ $total_amount }}</b></td>
            </tr>
        </tbody>
    </table>
    
    <table class="table-totals">
        <thead>
            <tr>
                <th align="right" colspan="5" style="color:#2C71DE;"><b>TOTAL AMOUNT</b></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td align="right" colspan="5">₹ {{ $total_amount }}</td>
            </tr>
            <tr>
                <td colspan="5"></td>
            </tr>
            <tr>
                <td colspan="5" align="right" style="color:#2C71DE;"><b>Total Amount (in Words)</b></td>
            </tr>
            <tr>
                <td colspan="5" align="right">{{ $amountInWords }}</td>
            </tr>
            <tr>
                <td colspan="5" ></td>
            </tr>
        </tbody>
    </table>

    <table class="table-totals">
        <thead>
            <tr>
                <th align="center" colspan="2"></th>
                <th align="center" colspan="3" style="color:#2C71DE;"><h1><b>ORDER PAYMENT HISTORY</b></h1></th>
            </tr>
            <tr>
                <th colspan="2"></th>
                <th align="left"><b>DATE</b></th>
                <th align="left"><b>AMOUNT</b></th>
                <th align="left"><b>METHOD</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($paymentHistory as $item)
            <tr>
                 <th colspan="2"></th>
                <td align="LEFT">{{ $item['date'] }}</td>
                <td align="LEFT">{{ $item['amount'] }}</td>
                <td align="LEFT">{{ $item['method'] }}</td>
            </tr>
            @endforeach
            <tr>
                <th colspan="5" ></th>
            </tr>
        </tbody>
    </table>

    <table class="table-totals">
        <thead>
            <tr>
                <th></th>
                <th align="center" colspan="4" size="15" style="color:#2C71DE;font: size 15px;"><h1><b>ORDER LABOUR DETAILS</b></h1></th>
            </tr>
            <tr>
                <th align="left"></th>
                <th align="left"><b>CATEGORY NAME</b></th>
                <th align="left"><b>NO. OF LABORS</b></th>
                <th align="left"><b>PER LABOR AMOUNT</b></th>
                <th align="left"><b>TOTAL AMOUNT</b></th>
            </tr>
            <tr>
                <th colspan="5"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($labourDetails as $Dates)
                <tr>
                    <th align="left" style="color:#2C71DE;"></th>
                    <th colspan="4" align="left" style="color:#2C71DE;"><b>{{$Dates[0]['date']}}</b></th>
                </tr>
                @foreach($Dates as $Date)
                    <tr>
                        <th align="left"></th>
                        <td align="left">{{ $Date['labor_category_name'] }}</td>
                        <td align="left">{{ $Date['number_of_labors'] }}</td>
                        <td align="left">{{ $Date['per_labor_amount'] }}</td>
                        <td align="left">{{ $Date['total_amount'] }}</td>
                        <th></th>
                    </tr>
                @endforeach
                <tr>
                    <th colspan="5" ></th>
                </tr>
            @endforeach
        </tbody>
    </table>

