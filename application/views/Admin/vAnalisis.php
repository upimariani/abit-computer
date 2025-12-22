<main class="h-full overflow-y-auto">
	<div class="container px-6 mx-auto grid">
		<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
			Grafik Analisis
		</h2>
		<hr>
		<?php
		if ($this->session->userdata('success') != '') {
		?>
			<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
				<div class="flex">
					<div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
						</svg></div>
					<div>
						<p class="font-bold">Sukses!</p>
						<p class="text-sm"><?= $this->session->userdata('success') ?></p>
					</div>
				</div>
			</div>
		<?php
		}
		?>
		<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
			Cetak Laporan Transaksi
		</h2>
		<div class="mx-3 mb-6 overflow-hidden rounded-lg shadow-xs">
			<div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
				<h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
					Transaksi
				</h4>
				<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
					<?= form_open_multipart('Admin/cLaporan') ?>
					<!-- Helper text -->
					<label class="block mt-4 text-sm">
						<span class="text-gray-700 dark:text-gray-400">
							Bulan:
						</span>
						<select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="bulan">
							<option value="">Pilih Bulan</option>
							<option value="1">Januari</option>
							<option value="2">Februari</option>
							<option value="3">Maret</option>
							<option value="4">April</option>
							<option value="5">Mei</option>
							<option value="6">Juni</option>
							<option value="7">Juli</option>
							<option value="8">Agustus</option>
							<option value="9">September</option>
							<option value="10">Oktober</option>
							<option value="11">November</option>
							<option value="12">Desember</option>
						</select>
					</label>
					<label class="block mt-4 text-sm">
						<span class="text-gray-700 dark:text-gray-400">
							Tahun:
						</span>
						<select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="tahun">
							<option value="">Pilih Tahun</option>
							<option value="2025">2025</option>
							<option value="2026">2026</option>
						</select>
					</label>


					<button type="submit" class="w-full mt-4 px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
						Cetak
					</button>
					</form>
				</div>
			</div>
		</div>
		<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
			Grafik Transaksi
		</h2>
		<div class="mx-3 mb-6 overflow-hidden rounded-lg shadow-xs">
			<div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
				<h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
					Transaksi
				</h4>
				<canvas id="transaksi"></canvas>
			</div>
		</div>
		<br>
		<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
			Grafik Level Member Pelanggan
		</h2>
		<div class="mx-3 mb-6 overflow-hidden rounded-lg shadow-xs">
			<div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
				<h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
					Level Member
				</h4>
				<canvas id="pelanggan"></canvas>
			</div>
		</div>
		<br>
	</div>


</main>
