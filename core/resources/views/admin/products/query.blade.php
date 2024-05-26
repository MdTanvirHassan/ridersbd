@extends('admin.layouts.app')
@section('panel')
<div class="row">
    <div class="col-lg-12">
        <div class="card b-radius--10">
            <div class="card-body">

                <div class="row justify-content-end">
                    <div class="col-lg-4 mb-3">
                        <form action="{{ request()->routeIs('admin.products.trashed') || request()->routeIs('admin.products.trashed.search')?route('admin.products.trashed.search'):route('admin.products.search') }}" method="GET" >
                            <div class="input-group has_append">
                                <input type="text" name="search" class="form-control" placeholder="@lang('Search')..."
                                    value="{{request()->search ?? '' }}">
                                <div class="input-group-append">
                                    <button class="btn btn--success" id="search-btn" type="submit"><i class="la la-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive--md table-responsive">
                    <table class="table table--light style--two">
                        <thead>
                            <tr>
                                <th>@lang('Id')</th>
                                <th>@lang('Thumbnail')</th>
                                <th>@lang('Product Name')</th>
                                <th>@lang('Name')</th>
                                <th>@lang('Phone')</th>
                                <th>@lang('Email')</th>
                                <th>@lang('Message')</th>
                                <th>@lang('Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                            <tr>
                                <td data-label="Id">
                                    {{ $products->firstItem() + $loop->index }}
                                </td>

                                <td data-label="@lang('Thumbnail')">
                                    <div class="thumbnails d-inline-block">
                                        <div class="thumb">
                                            <a href="{{ getImage(imagePath()['product']['path'].  '/thumb_'. @$product->main_image, imagePath()['product']['size']) }}" class="image-popup">
                                                <img src="{{ getImage(imagePath()['product']['path']. '/thumb_'. @$product->main_image, imagePath()['product']['size']) }}" alt="@lang('image')">
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="@lang('Product Name')">
                                    <a href="{{ route('product.details', [$product->product_id, slug($product->pro_name)]) }}"><span class="name mb-0"  onclick="{{$product->trashed()?'return false':''}}" data-toggle="tooltip" data-placement="top" title="{{ __($product->pro_name) }}">
                                        {{ shortDescription($product->pro_name, 50) }}</span>
                                    </a>
                                </td>

                                <td data-label="@lang('Name')">
                                    <a href=""><span class="name mb-0"  onclick="{{$product->trashed()?'return false':''}}" data-toggle="tooltip" data-placement="top" title="{{ __($product->p_name) }}">
                                        {{ shortDescription($product->p_name, 50) }}</span>
                                    </a>
                                </td>
                                
                                <td data-label="@lang('Phone')">{{$product->phone}}</td>

                                <td data-label="@lang('Email')">
                                {{$product->email}}
                                </td>
                                <td data-label="@lang('Email')">
                                {{$product->message}}
                                </td>
                                <td data-label="@lang('Action')">
                                    @if($product->status == 0)
                                        <button class="btn btn-sm p-1 bg-success approve-btn" data-product-id="{{ $product->id }}">Approve</button>
                                    @else
                                        <button class="btn btn-sm p-1 bg-secondary">Approved</button>
                                    @endif
                                </td>

                            </tr>
                            @empty
                            <tr>
                                <td class="text-muted text-center" colspan="100%">{{ __($empty_message) }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-4">
                <nav aria-label="...">
                    {{ $products->appends(['search'=>request()->search ?? null])->links('admin.partials.paginate') }}
                </nav>
            </div>

        </div>
    </div>
</div>

{{-- REMOVE METHOD MODAL --}}

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="" method="POST" id="deleteForm">
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize" id="deleteModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-bold">

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--dark" data-dismiss="modal">@lang('No')</button>
                    <button type="submit" class="btn btn--danger">@lang('Yes')</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="highlight-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('Highlight As')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="{{route('admin.products.highlight')}}" method="post">
                @csrf
                <input type="hidden" name="product_id"/>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="font-weight-bold">
                                @lang('Featured')
                            </label>
                        </div>
                        <div class="col-md-8">
                            <label class="switch">
                                <input type="checkbox" name="featured" value="1" >
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="font-weight-bold">
                                @lang('Special')
                            </label>
                        </div>
                        <div class="col-md-8">
                            <label class="switch">
                                <input type="checkbox" name="special" value="1">
                                <span class="slider round"></span>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn--success btn-block">@lang('Save')</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
@push('breadcrumb-plugins')
    @if(request()->routeIs('admin.products.all'))
    <a href="{{ route('admin.products.create') }}" title="@lang('Shortcut'): shift+n" class="btn btn-sm btn--success box--shadow1 text--small"><i class="la la-plus"></i>@lang('Add New')</a>
    @else
        @if(request()->routeIs('admin.products.trashed.search'))
        <a href="{{route('admin.products.trashed')}}" class="btn btn-sm btn--primary box--shadow1 text--small">
            <i class="la la-backward"></i>@lang('Go Back')</a>
        @else
        <a href="{{route('admin.products.all')}}" class="btn btn-sm btn--primary box--shadow1 text--small">
            <i class="la la-backward"></i>@lang('Go Back')</a>
        @endif
    @endif

    @if(request()->routeIs('admin.products.all'))
    <a href="{{ route('admin.products.trashed') }}" class="btn btn-sm btn--danger box--shadow1 text--small"><i class="la la-trash-alt"></i>@lang('Trashed')</a>
    @endif
@endpush

@push('script')

<script>

    "use strict";
    (function ($) {

        $(document).keypress(function (e) {
            var unicode = e.charCode ? e.charCode : e.keyCode;
            if(unicode == 78){
                window.location = "{{ route('admin.products.create') }}";
            }
        });

        $('.deleteBtn').on('click', function () {
            var modal   = $('#deleteModal');
            var id      = $(this).data('id');
            var type    = $(this).data('type');
            var form    = document.getElementById('deleteForm');

            if(type == 'delete'){
                modal.find('.modal-title').text('{{ trans("Delete Product") }}');
                modal.find('.modal-body').text('{{ trans("Are you sure to delete this product?") }}');
            }else{
                modal.find('.modal-title').text('{{ trans("Restore Product") }}');
                modal.find('.btn--danger').removeClass('btn--danger').addClass('btn--success');
                modal.find('.modal-body').text('{{ trans("Are you sure to restore this product?") }}');
            }

            form.action = '{{ route('admin.products.delete', '') }}'+'/'+id;
            modal.modal('show');
        });

        $('.image-popup').magnificPopup({
            type: 'image'
        });

        $('.highlight-btn').on('click', function(e){
            var modal       = $('#highlight-modal');
            var id          = $(this).data('id');
            var featured    = $(this).data('featured');
            var special     = $(this).data('special');

            if(featured == 1){
                modal.find('input[name=featured]').prop('checked', true);
            }else{
                modal.find('input[name=featured]').prop('checked', false);
            }

            if(special == 1){
                modal.find('input[name=special]').prop('checked', true);
            }else{
                modal.find('input[name=special]').prop('checked', false);
            }

            modal.find('input[name=product_id]').val(id);
            modal.modal('show');
        });
    })(jQuery)

    $(document).ready(function() {
        $('.approve-btn').on('click', function() {
            var productId = $(this).data('product-id');
            var button = $(this);

            $.ajax({
                url: '{{ route('admin.products.approve') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: productId
                },
                success: function(response) {
                    if (response.success) {
                        button.removeClass('bg-success').addClass('bg-secondary').text('Approved');
                        button.prop('disabled', true);
                    } else {
                        alert('Failed to approve product.');
                    }
                },
                error: function() {
                    alert('Error occurred while approving product.');
                }
            });
        });
    });
</script>

@endpush


