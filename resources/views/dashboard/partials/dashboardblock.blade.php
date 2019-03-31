
	<div class="media">
	<a class="pull-left" href="">
	</a>
	<div class="media-body">
	@if ($order->ordernumber)
	<tbody style="font-size:14px">
		<tr>
			<td><img class="media-object" alt="{{ $order->ordernumber }}" src="{{ asset('image/default.svg') }}" style="width:40px; height:40px; float:left; border-radius:50%; margin-right:25px;"></td>
			<td><strong>{{ $order->staffname }}</strong></td>
			<td>{{ $order->staffid }}</td>
			<td>{{ $order->branchname }}</td>
			<td>{{ $order->branchnumber }}</td>
			<td>{{ $order->ponumber }}</td>
			<td>{{ $order->itemnumber }}</td>
			<td>{{ $order->orderitems }}</td>
			<td>{{ $order->itemqty }}</td>
			<td>{{ $order->freeitem }}</td>
			<td>{{ $order->itemprice }} SR</td>
			<td>{{ Carbon\Carbon::parse($order->created_at)->diffForHumans() }}</td>
		</tr>	
	</tbody>
        @endif
	</div>
</div>