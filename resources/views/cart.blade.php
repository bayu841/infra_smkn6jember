@extends('layouts.app')

@section('title', 'Keranjang Belanja')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Keranjang Belanja Anda</h1>

    @if(session('cart') && count(session('cart')) > 0)
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Daftar Item Keranjang -->
            <div class="w-full lg:w-2/3">
                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md" role="alert">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                <div class="bg-white rounded-xl shadow-md divide-y divide-gray-200">
                    @php $total = 0 @endphp
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <div class="p-6 flex items-center gap-6">
                            <img src="{{ asset($details['image']) }}" alt="{{ $details['name'] }}" class="w-28 h-28 rounded-lg object-cover border border-gray-200">
                            <div class="flex-grow">
                                <h3 class="font-semibold text-xl text-gray-800 mb-1">{{ $details['name'] }}</h3>
                                <p class="text-gray-600 text-lg">Rp {{ number_format($details['price'], 0, ',', '.') }}</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <!-- Update Quantity -->
                                <form action="{{ route('cart.update') }}" method="POST" class="flex items-center" id="update-form-{{ $id }}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="product_id" value="{{ $id }}">
                                    <button type="button" class="quantity-btn bg-gray-200 text-gray-700 px-3 py-1 rounded-l-md hover:bg-gray-300" data-action="decrement" data-id="{{ $id }}">-</button>
                                    <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1" class="w-16 text-center border-y border-gray-300 focus:outline-none" readonly>
                                    <button type="button" class="quantity-btn bg-gray-200 text-gray-700 px-3 py-1 rounded-r-md hover:bg-gray-300" data-action="increment" data-id="{{ $id }}">+</button>
                                    <button type="submit" class="ml-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 text-sm">Update</button>
                                </form>
                                <!-- Remove Item -->
                                <form action="{{ route('cart.remove') }}" method="POST" class="remove-item-form">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="product_id" value="{{ $id }}">
                                    <button type="submit" class="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50"><i class="fas fa-trash text-lg"></i></button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Ringkasan Pesanan -->
            <div class="w-full lg:w-1/3">
                <div class="bg-white rounded-xl shadow-md p-6 sticky top-24 border border-gray-200">
                    <h2 class="text-xl font-bold border-b pb-4 mb-4 text-gray-800">Ringkasan Pesanan</h2>
                    <div class="space-y-3">
                        <div class="flex justify-between text-gray-700">
                            <span>Subtotal</span>
                            <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between font-bold text-lg border-t pt-4 mt-4 text-gray-800">
                            <span>Total</span>
                            <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <button id="checkout-button" class="mt-6 w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition transform hover:scale-105">Lanjutkan ke Checkout</button>
                </div>
            </div>
        </div>

    <!-- Modal Checkout -->
    <div id="checkout-modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-lg">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Lengkapi Data Pengiriman</h2>
            <form id="checkout-form">
                <div class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                        <textarea id="address" name="address" rows="3" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                </div>
                <div class="mt-8 flex justify-end gap-4">
                    <button type="button" id="close-modal" class="px-6 py-2 rounded-lg border border-gray-300 text-gray-700 font-semibold hover:bg-gray-100 transition">Batal</button>
                    <button type="submit" class="px-6 py-2 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">Lanjutkan Pembayaran</button>
                </div>
            </form>
        </div>
    </div>

    @else
        <div class="text-center py-20 bg-white rounded-xl shadow-md border border-gray-200">
            <i class="fas fa-shopping-cart text-6xl text-gray-300 mb-4"></i>
            <h2 class="text-2xl font-bold text-gray-800">Keranjang Anda Kosong</h2>
            <p class="text-gray-500 mb-6">Sepertinya Anda belum menambahkan produk apapun.</p>
            <a href="/" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition transform hover:scale-105">Mulai Belanja</a>
        </div>
    @endif
</div>
@endsection

@push('scripts')
    <script src="{{ config('midtrans.snap_url') }}" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('checkout-modal');
    const checkoutButton = document.getElementById('checkout-button');
    const closeModalButton = document.getElementById('close-modal');
    const checkoutForm = document.getElementById('checkout-form');

    if (checkoutButton) {
        checkoutButton.addEventListener('click', () => modal.classList.remove('hidden'));
    }
    if (closeModalButton) {
        closeModalButton.addEventListener('click', () => modal.classList.add('hidden'));
    }

    // Quantity controls
    document.querySelectorAll('.quantity-btn').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.dataset.id;
            const input = document.querySelector(`#update-form-${productId} input[name="quantity"]`);
            let quantity = parseInt(input.value);

            if (this.dataset.action === 'decrement') {
                quantity = quantity > 1 ? quantity - 1 : 1;
            } else if (this.dataset.action === 'increment') {
                quantity++;
            }
            input.value = quantity;
            // Automatically submit the form after quantity change
            document.querySelector(`#update-form-${productId}`).submit();
        });
    });

    if (checkoutForm) {
        checkoutForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(this);
            const data = Object.fromEntries(formData.entries());

            fetch('{{ route("checkout") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.snap_token) {
                    modal.classList.add('hidden');
                    window.snap.pay(data.snap_token, {
                        onSuccess: function(result) { 
                            window.location.href = '{{ route("payment.success") }}'; 
                        },
                        onPending: function(result) {
                            Swal.fire({
                                icon: 'info',
                                title: 'Menunggu Pembayaran',
                                text: 'Menunggu pembayaran Anda',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        },
                        onError: function(result) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Pembayaran Gagal!',
                                text: 'Pembayaran Gagal!',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: data.error || 'Gagal mendapatkan token pembayaran.',
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error Koneksi!',
                    text: 'Terjadi kesalahan koneksi.',
                    showConfirmButton: false,
                    timer: 3000
                });
            });
        });
    }

    document.querySelectorAll('.remove-item-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Produk ini akan dihapus dari keranjang!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
    </script>
@endpush