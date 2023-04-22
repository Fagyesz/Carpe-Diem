@props(['ticket'])
	<div class=" bg-blue-800 w-2/3 rounded-3xl">
		<div class="flex flex-col">
			<div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
				<div class="">
					<div class="">
                        <div class="font-bold flex justify-center text-center pb-4">{{ DB::table('events')->where('id', $ticket['event_id'])->value('title') }}</div>
							<div class="border-b border-dashed border-b-2"></div>
							<div class="flex items-center justify-center mb-5 pt-3">

								<div class="flex flex-col justify-center ">
									<span class=" text-center font-bold">Status</span>
									@if ($ticket->ticket_status != "Unused")
										<div class="font-semibold justify-center text-center text-red-600">{{ $ticket->ticket_status }}</div>
									@else
										<div class="font-semibold  justify-center text-center text-green-600">{{ $ticket->ticket_status }}</div>
									@endif	
								</div>
							</div>
							<div class="flex items-center justify-center mb-4">
								<div class="flex flex-col pr-6">
									<span class="font-bold flex justify-center">Start</span>
									<div class="font-semibold">{{ \Carbon\Carbon::parse(DB::table('events')->where('id', $ticket['event_id'])->value('start_time'))->format('h:m') }}</div>

								</div>
								<div class="flex flex-col p-1 ">
									<span class="flex justify-center  font-bold">Date</span>
									<div class="font-semibold text-center">{{ \Carbon\Carbon::parse(DB::table('events')->where('id', $ticket['event_id'])->value('start_time'))->format('y.m.d') }} <br>
										- <br>
										{{ \Carbon\Carbon::parse(DB::table('events')->where('id', $ticket['event_id'])->value('end_time'))->format('y.m.d') }}
									</div>

								</div>
								<div class="flex flex-col text-sm pl-6">
									<span class="font-bold flex justify-center">End</span>
									<div class="font-semibold">{{ \Carbon\Carbon::parse(DB::table('events')->where('id', $ticket['event_id'])->value('end_time'))->format('h:m') }}</div>

								</div>
                                
							</div>
							<div class="border-b border-dashed border-b-2">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


