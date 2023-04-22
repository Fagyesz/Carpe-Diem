@props(['ticket'])
    <div class="pt-12 ">
	<div class="max-w-md w-full h-full mx-auto z-10 bg-blue-800 rounded-3xl">
		<div class="flex flex-col">
			<div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
				<div class="flex-none sm:flex">
					<div class="flex-auto justify-evenly">
                        <div>Title</div>
							<div class="border-b border-dashed border-b-2  ">
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
							</div>
							<div class="flex items-center justify-center mb-5 pt-3 text-sm">

								<div class="flex flex-col justify-center ">
									<span class="text-sm text-center font-bold">Status</span>
									@if ($ticket->ticket_status != "Unused")
										<div class="font-semibold text-center text-red-600">{{ $ticket->ticket_status }}</div>
									@else
										<div class="font-semibold text-center text-green-600">{{ $ticket->ticket_status }}</div>
									@endif	
								</div>
							</div>
							<div class="flex items-center mb-4 px-5">
								<div class="flex flex-col text-sm">
									<span class="font-bold flex justify-center">Start</span>
									<div class="font-semibold">{{ \Carbon\Carbon::parse(DB::table('events')->where('id', $ticket['event_id'])->value('start_time'))->format('h:m') }}</div>

								</div>
								<div class="flex flex-col mx-auto text-sm">
									<span class="flex justify-center font-bold">Date</span>
									<div class="font-semibold text-center">{{ \Carbon\Carbon::parse(DB::table('events')->where('id', $ticket['event_id'])->value('start_time'))->format('y.m.d') }} <br>
										- <br>
										{{ \Carbon\Carbon::parse(DB::table('events')->where('id', $ticket['event_id'])->value('end_time'))->format('y.m.d') }}
									</div>

								</div>
								<div class="flex flex-col  text-sm">
									<span class="font-bold flex justify-center">End</span>
									<div class="font-semibold">{{ \Carbon\Carbon::parse(DB::table('events')->where('id', $ticket['event_id'])->value('end_time'))->format('h:m') }}</div>

								</div>
                                
							</div>
							<div class="border-b border-dashed border-b-2 mt-5 pt-5">
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>

