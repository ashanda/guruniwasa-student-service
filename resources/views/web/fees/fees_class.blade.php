@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
{{-- {{ dd(session('cart')) }} --}}
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">CLASS FEES
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row  justify-content-center middle-hight">
      <div class="col-12">
         <div class="row justify-content-end">
            <div class="col-lg-2 text-center pb-3">
               <a href="{{ route('web.subject-cart',['month' => $currentMonth]) }}"
                  class=" w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center text-white hvr-shrink"><i
                  class="fa-solid fa-cart-shopping me-2"></i><span id="cart-count">{{ session('cart') ? count(session('cart')) : 0 }}</span> View CART
               </a>
            </div>
         </div>
      </div>

      @foreach($body['data']['student_subject'] as $studentsubject)
      @php
            $isInCart = false;

            // Check if the item is already in the cart
            if (session()->has('cart')) {
                $cart = session('cart');
                foreach ($cart as $cartItem) {
                    if ($cartItem['data']['student_subjects']['id'] === $studentsubject['data']['student_subjects']['id']) {
                        $isInCart = true;
                        break;
                    }
                }
            }
        @endphp

      <div class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <div class="row justify-content-center pt-2 pb-3">
               <div class="col-6">
                  <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
            </div>
            <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">{{ $studentsubject['data']['student_subjects']['grade']['gname'] }}</span></p>
            <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> {{ $studentsubject['data']['student_subjects']['sname'] }} |
               {{ $studentsubject['data']['student_subjects']['sname'] }} | {{ $studentsubject['data']['student_subjects']['teacher']['data']['name'] ?? ' ' }}
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Month - <span class="fw-bolder text-dark"> {{ $months[0]['english']}}
               </span>
            </p>
            <p class="font-18 fw-bolder text-success text-center pt-4">LKR {{ $studentsubject['data']['student_subjects']['fee'] }}.00
            </p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white e">
                     @if($isInCart)
                        <!-- Display Remove from Cart Button -->
                        <button type="button" class="remove-from-cart-btn w-100 text-uppercase font-14 rounded-pill py-2 px-3 bg-danger fw-500 align-items-center text-white"
                                data-item-id="{{ $studentsubject['data']['student_subjects']['id'] }}">
                            Remove from Cart
                        </button>
                    @else
                        <!-- Display Add to Cart Button -->
                        <button type="button" class="add-to-cart-btn w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center hvr-shrink"
                                data-item="{{ json_encode($studentsubject) }}">
                            ADD TO CART
                        </button>
                    @endif
               </div>
            </div>
         </div>
      </div>
      @endforeach
    
     
     <div class="row justify-content-center ">
        <div class="col-lg-3 col-10 text-center pt-4">
            <a href="{{ route('web.subject-cart')}}" class=" w-100 text-uppercase font-15  rounded-pill p-3 bg-secondary fw-500 align-items-center text-white hvr-shrink">PAYMENT HISTORY
            </a>
        </div>

        <div class="col-lg-3 col-10 text-center pt-4">
            <a href="{{ route('web.teacher.subject') }}" class=" w-100 text-uppercase font-15  rounded-pill p-3 bg-info fw-500 align-items-center text-dark hvr-shrink">Add New Subject
            </a>
        </div>
      </div>

    </div>
   </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const cartCountElement = document.getElementById('cart-count');

    // Handle add-to-cart button click event
    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function () {
            const itemData = JSON.parse(this.getAttribute('data-item'));

            fetch('{{ route('web.add-to-cart') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ item: itemData })
            })
            .then(response => response.json())
            .then(data => {
                    cartCountElement.textContent = data.cartCount;
                    this.textContent = 'Remove from Cart';
                    this.classList.remove('bg-success');
                    this.classList.add('bg-danger');
                    this.classList.add('remove-from-cart-btn');
                    this.disabled = false;

                    // Update button data attribute to match the item ID
                    this.setAttribute('data-item-id', itemData.data.student_subjects.id);
            })
            .catch(error => console.error('Error:', error));
        });
    });

    // Handle remove-from-cart button click event
    document.addEventListener('click', function (event) {
        if (event.target.matches('.remove-from-cart-btn')) {
            const itemId = event.target.getAttribute('data-item-id');

            fetch('{{ route('web.remove-from-cart') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ item_id: itemId })
            })
            .then(response => response.json())
            .then(data => {
                cartCountElement.textContent = data.cartCount;

                // Remove the item from the UI
                const itemElement = document.querySelector(`.cart-item[data-item-id="${itemId}"]`);
                if (itemElement) {
                    itemElement.remove();
                }

                // Change button back to "Add to Cart" state if needed
                const button = document.querySelector(`.add-to-cart-btn[data-item-id="${itemId}"]`);
                if (button) {
                    button.textContent = 'Add to Cart';
                    button.classList.remove('bg-danger');
                    button.classList.add('bg-success');
                    button.classList.remove('remove-from-cart-btn');
                    button.classList.add('add-to-cart-btn');
                    button.disabled = false;
                }
            })
            .catch(error => console.error('Error:', error));
        }
    });
});
</script>
@endsection


