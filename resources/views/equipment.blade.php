@extends('layout')

@section('content')
	<div class="mt-12 text-lg">
		<h2 class="mt-6 text-xl font-extrabold uppercase">Required Equipement</h2>
		<p class="mt-4">In order to make sure you sound great, and to provide a quality experience for our listeners, we recommend that you join from a computer using the equipment listed below.</p>
		<p class="mt-4">If you absolutely cannot join from a computer, you can alternatively use an iPhone, but keep in mind your audio will be lower quality.</p>
		<p class="mt-4">Please let us know if you have any questions.</p>
		
		<h3 class="mt-6 font-bold">Joining from a Computer (preferred)</h3>
		<ul class="list-disc list-inside">
			<li class="mt-2">You will need <a href="https://www.google.com/chrome/" target="_blank" class="underline">Google Chrome</a> installed.</li>
			<li class="mt-2">You will need an external microphone and wired headphones. Your laptop's built-in microphone, an external webcam microphone, or airpods won't work.</li>
			<li class="mt-2">If you don't have either, you can buy this <a href="https://www.amazon.com/Sennheiser-PC-USB-Headset-line/dp/B005HWEZGG" target="_blank" class="underline">USB headset</a> for $24. If you're on a newer computer, you may also need a <a href="https://www.amazon.com/AmazonBasics-Type-C-Gen1-Female-Adapter/dp/B01GGKYXVE/ref=sxin_15_ac_d_mf_rf?ac_md=4-2-QW1hem9uQmFzaWNz-ac_d_mf_rf_rf&cv_ct_cx=usb+c+to+usb+adapter&dchild=1&keywords=usb+c+to+usb+adapter&pd_rd_i=B01GGKYXVE&pd_rd_r=62190be3-5053-44b9-8795-4f213304937e&pd_rd_w=YrC2U&pd_rd_wg=yqNeJ&pf_rd_p=95fb715a-d44a-4a3c-ac61-fb2df95cb7e9&pf_rd_r=KDECFGJTNJVTVR0209C8&psc=1&qid=1633065786&sr=1-3-1db1fce3-1628-43df-a6c6-84620ba4aaaa" target="_blank" class="underline">USB-C to USB</a> adapter.</li>
		</ul>

		<h3 class="mt-6 font-bold">Joining from an iPhone</h3>
		<ul class="list-disc list-inside">
			<li class="mt-2">You will need to install the <a href="https://riverside.fm/ios" target="_blank" class="underline">Riverside.fm app</a> from the app store.</li>
			<li class="mt-2">You will need <a href="https://www.apple.com/us/shop/product/MMTN2AM/A/earpods-with-lightning-connector" target="_blank" class="underline">wired earpods</a> with a built-in microphone. Speakerphone or airpods won't work.</li>
		</ul>

		<a href="/start" class="block mt-6 italic underline">Go Back</a>
	</div>
@endsection
