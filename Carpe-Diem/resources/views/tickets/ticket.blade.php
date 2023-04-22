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
								<div class="flex text-xs text-gray-400 my-1 justify-center">
									<span class="mr-1 ">{{ \Carbon\Carbon::parse($event->start_time)->format('m.d')}}</span>
								</div>
								<div class="w-full py-1 flex-none text-lg text-blue-800 font-bold leading-none">{{ $ticket->ticket_type }}</div>
								<div class="text-xs flex justify-center">Ticket</div>

							</div>
							<div class="flex flex-col mx-auto">
								<img src="../images/CD-logo2.png" class="w-24 p-1">

								</div>
								<div class="flex flex-col ">
									<div class="flex text-xs text-gray-400 my-1 justify-center">
										<span class="mr-1">{{ \Carbon\Carbon::parse($event->end_time)->format('m.d')}}</span>
									</div>
									<div class="w-full py-1 flex-none text-lg text-blue-800 font-bold leading-none">{{ $ticket->ticket_type }}</div>
									<div class="text-xs flex justify-center">Ticket</div>

								</div>
							</div>
							<div class="border-b border-dashed border-b-2  pb-5">
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
							</div>
							<div class="flex items-center mb-5 p-5 text-sm">
								<div class="flex flex-col">
									<span class="text-sm">Flight</span>
									<div class="font-semibold">Airbus380</div>

								</div>
								<div class="flex flex-col ml-auto">
									<span class="text-sm">Gate</span>
									<div class="font-semibold">B3</div>

								</div>
							</div>
							<div class="flex items-center mb-4 px-5">
								<div class="flex flex-col text-sm">
									<span class="">Board</span>
									<div class="font-semibold">11:50AM</div>

								</div>
								<div class="flex flex-col mx-auto text-sm">
									<span class="">Departs</span>
									<div class="font-semibold">11:30Am</div>

								</div>
								<div class="flex flex-col text-sm">
									<span class="">Arrived</span>
									<div class="font-semibold">2:00PM</div>

								</div>
							</div>
							<div class="border-b border-dashed border-b-2 mt-5 pt-5">
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
							</div>
							<div class="flex flex-col py-5  justify-center text-sm ">
								<h6 class="font-bold text-center pb-6">Ticket QR Code:</h6>

								<div class="barcode flex justify-center">
									<img class="hidden w-60 md:block"
                    					src="{{ url('storage/' . $ticket->ticket_image_url) }}"
                   						alt="" />
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