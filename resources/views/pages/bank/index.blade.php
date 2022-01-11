@extends('layouts.main')
@section('container')
    <div class="row">
        @include('partials.overview')
        <div class="col-md-8 offset-md-2 mt-2">
            @if($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <h3 class="text-blue font-weight-bold mt-5">Stok Bank Darah</h3>
            <small>Pengubah Terakhir : {{ $bloodBank[0]->modified_by ?? "-" }}</small>
            <form action="{{ url('/_bank') }}" method="POST" class="mt-4">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-3">
                            <label for="a_positive_blood_bank" class="text-title1 text-blue">A (+)</label>
                            <input type="text"
                                   class="form-control mt-1 text-title1 text-blue w-50 @error('a_positive_blood_bank') is-invalid @enderror"
                                   id="a_positive_blood_bank" name="a_positive_blood_bank"
                                   placeholder="Jumlah" required value="{{ $bloodBank[0]->a_positive_blood_bank }}">
                            @error('a_positive_blood_bank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-3">
                            <label for="a_negative_blood_bank" class="text-title1 text-blue">A (-)</label>
                            <input type="text"
                                   class="form-control mt-1 text-title1 text-blue w-50 @error('a_negative_blood_bank') is-invalid @enderror"
                                   id="a_negative_blood_bank" name="a_negative_blood_bank"
                                   placeholder="Jumlah" required value="{{ $bloodBank[0]->a_negative_blood_bank }}">
                            @error('a_negative_blood_bank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-3">
                            <label for="ab_positive_blood_bank" class="text-title1 text-blue">AB (+)</label>
                            <input type="text"
                                   class="form-control mt-1 text-title1 text-blue w-50 @error('ab_positive_blood_bank') is-invalid @enderror"
                                   id="ab_positive_blood_bank" name="ab_positive_blood_bank"
                                   placeholder="Jumlah" required value="{{ $bloodBank[0]->ab_positive_blood_bank }}">
                            @error('ab_positive_blood_bank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-3">
                            <label for="ab_negative_blood_bank" class="text-title1 text-blue">AB (-)</label>
                            <input type="text"
                                   class="form-control mt-1 text-title1 text-blue w-50 @error('ab_negative_blood_bank') is-invalid @enderror"
                                   id="ab_negative_blood_bank" name="ab_negative_blood_bank"
                                   placeholder="Jumlah" required value="{{ $bloodBank[0]->ab_negative_blood_bank }}">
                            @error('ab_negative_blood_bank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-3">
                            <label for="b_positive_blood_bank" class="text-title1 text-blue">B (+)</label>
                            <input type="text"
                                   class="form-control mt-1 text-title1 text-blue w-50 @error('b_positive_blood_bank') is-invalid @enderror"
                                   id="b_positive_blood_bank" name="b_positive_blood_bank"
                                   placeholder="Jumlah" required value="{{ $bloodBank[0]->b_positive_blood_bank }}">
                            @error('b_positive_blood_bank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-3">
                            <label for="b_negative_blood_bank" class="text-title1 text-blue">B (-)</label>
                            <input type="text"
                                   class="form-control mt-1 text-title1 text-blue w-50 @error('b_negative_blood_bank') is-invalid @enderror"
                                   id="b_negative_blood_bank" name="b_negative_blood_bank"
                                   placeholder="Jumlah" required value="{{ $bloodBank[0]->b_negative_blood_bank }}">
                            @error('b_negative_blood_bank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-3">
                            <label for="o_positive_blood_bank" class="text-title1 text-blue">O (+)</label>
                            <input type="text"
                                   class="form-control mt-1 text-title1 text-blue w-50 @error('o_positive_blood_bank') is-invalid @enderror"
                                   id="o_positive_blood_bank" name="o_positive_blood_bank"
                                   placeholder="Jumlah" required value="{{ $bloodBank[0]->o_positive_blood_bank }}">
                            @error('o_positive_blood_bank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mb-3">
                            <label for="o_negative_blood_bank" class="text-title1 text-blue">O (-)</label>
                            <input type="text"
                                   class="form-control mt-1 text-title1 text-blue w-50 @error('o_positive_blood_bank') is-invalid @enderror"
                                   id="o_negative_blood_bank" name="o_negative_blood_bank"
                                   placeholder="Jumlah" required value="{{ $bloodBank[0]->o_negative_blood_bank }}">
                            @error('o_negative_blood_bank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <input type="hidden" name="modified_by" value="{{ auth()->user()->name_employees }}">
                <button class="btn bg-red text-white mt-4 w-25 text-title2" type="submit">Simpan</button>
            </form>
        </div>
        @if(session()->has('updateSuccess'))
            <div class="position-fixed" style="right: 10px;bottom: 50px">
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                    <div class="toast-header d-flex justify-content-between">
                        <img src="{{ url('/images/logo.png') }}" class="rounded mr-2 img-fluid w-25" alt="...">
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        {{ session('updateSuccess') }}
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('custom-script')
    <script>
        $('.toast').toast('show');
    </script>
@endsection
