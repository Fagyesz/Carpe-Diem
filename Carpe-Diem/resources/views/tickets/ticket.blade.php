@extends('layout')

@section('content')

<div class="flex flex-col items-center justify-center min-h-screen bg-center bg-cover"
	style="background-image: url(../images/single_listing_bg.jpg)">
    <div class="pt-12 w-full pb-12">
	<div class="max-w-md w-full h-full mx-auto z-10 bg-blue-800 rounded-3xl">
		<div class="flex flex-col">
			<div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
				<div class="flex-none sm:flex">
					<div class="flex-auto justify-evenly">
						<div class="flex items-center">
							<div class="flex flex-col">
								<div class="flex text-xs text-gray-400  justify-center">
									<span class=" ">{{ \Carbon\Carbon::parse($event->start_time)->format('y.m.d')}}</span>
								</div>
								<div class="w-full py-1 flex-none text-lg text-blue-800 font-bold leading-none">{{ $ticket->ticket_type }}</div>
								<div class="text-xs flex justify-center">Ticket</div>

							</div>
							<div class="flex flex-col mx-auto">
								<img src="../images/CD-logo2.png" class="w-24 p-1">

								</div>
								<div class="flex flex-col ">
									<div class="flex text-xs text-gray-400  justify-center">
										<span class="">{{ \Carbon\Carbon::parse($event->end_time)->format('y.m.d')}}</span>
									</div>
									<div class="w-full py-1 flex-none text-lg text-blue-800 font-bold leading-none">{{ $ticket->ticket_type }}</div>
									<div class="text-xs flex justify-center">Ticket</div>

								</div>
							</div>
							<div class="border-b border-dashed border-b-2  pb-5">
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
							</div>
							<div class="flex items-center mb-5 pt-3 text-sm">
								<div class="flex flex-col mt-auto">
									<span class="text-sm font-bold">Location</span>
									<div class="font-semibold">{{ $event->location }}</div>

								</div>
								<div class="flex flex-col justify-center ml-auto mt-auto">
									<span class="text-sm text-center font-bold">Status</span>
									<div class="font-semibold text-center">{{ $ticket->ticket_status }}</div>

								</div>
							</div>
							<div class="flex items-center mb-4 px-5">
								<div class="flex flex-col text-sm">
									<span class="font-bold flex justify-center">Start</span>
									<div class="font-semibold">{{ \Carbon\Carbon::parse($event->start_time)->format('h:i') }}</div>

								</div>
								<div class="flex flex-col mx-auto text-sm">
									<span class="flex justify-center font-bold">Date</span>
									<div class="font-semibold text-center">{{ \Carbon\Carbon::parse($event->start_time)->format('y.m.d') }} <br>
										- <br>
										{{ \Carbon\Carbon::parse($event->end_time)->format('y.m.d') }}
									</div>

								</div>
								<div class="flex flex-col  text-sm">
									<span class="font-bold flex justify-center">End</span>
									<div class="font-semibold">{{ \Carbon\Carbon::parse($event->end_time)->format('h:i') }}</div>

								</div>
							</div>
							<div class="border-b border-dashed border-b-2 mt-5 pt-5">
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
							</div>
							<div class="flex flex-col pt-5  justify-center text-sm ">
								<h6 class="font-bold text-center pb-6">Ticket QR Code:</h6>

								<div class="barcode flex justify-center">
									<img class="hidden w-60 md:block"
                    					src="{{ url('storage/' . $ticket->ticket_image_url) }}"
                   						alt="" />
								</div>
								<div class="flex justify-center text-center italic pt-8">
									Ticket bought: {{ \Carbon\Carbon::parse($ticket->created_at)->format('Y.m.d H:m:i') }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	</div>
</div>

@endsection