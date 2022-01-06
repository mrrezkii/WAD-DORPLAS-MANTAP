@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="d-flex flex-column mb-5" id="lightgallery">
                @if(auth()->user()->profile_images_donators != null)
                    <img src="{{ auth()->user()->profile_images_donators }}" class="rounded-circle mx-auto mt-5"
                         width="100px"
                         height="100px" alt="avatar">
                @else
                    <img src="{{ url('/images/avatar.jpg') }}" class="rounded-circle mx-auto mt-5" width="100px"
                         height="100px" alt="avatar">
                @endif
                <div class="m-auto d-flex">
                    <p>
                        <img src="{{ url('/images/icon/ic_star.svg') }}" alt="point" class="ml-3" width="20px">
                        <span class="text-title1 text-blue">{{ auth()->user()->point_donators }}</span>
                    </p>
                    <span class="text-secondary text-title1 ml-2">&bull;</span>
                    <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#detailModal">
                        <p class="mb-1 ml-3 text-center">
                            <span class="text-title1 text-blue">Ubah foto</span>
                            <i class="fas fa-edit text-red"></i>
                        </p>
                    </a>
                </div>


            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card mb-4 mx-auto" style="width: 100%;">
                <div class="card-header py-3">
                    <div class="d-flex">
                        <h6 class="m-auto text-title1 text-red text-center"><span>
                                 <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.58957 2.45232C7.88312 2.45232 9.05482 2.97724 9.90781 3.82086L7.52693 6.20175H13.1511V0.577606L11.2295 2.49919C10.039 1.30874 8.39867 0.577606 6.58957 0.577606C3.2807 0.577606 0.562369 3.02411 0.103065 6.20175H1.99653C2.42771 4.06457 4.32117 2.45232 6.58957 2.45232ZM11.8763 11.0198C12.4949 10.1761 12.9261 9.17317 13.0761 8.07646H11.1826C10.7514 10.2136 8.85798 11.8259 6.58957 11.8259C5.29602 11.8259 4.12432 11.301 3.27133 10.4573L5.65222 8.07646H0.0280762V13.7006L1.94966 11.779C3.1401 12.9695 4.78047 13.7006 6.58957 13.7006C8.04248 13.7006 9.3829 13.2225 10.4702 12.4258L15.0258 16.972L16.4224 15.5753L11.8763 11.0198Z"
                                fill="#BA181B"/>
                        </svg>
                            </span>Sebagai Pemohon
                        </h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="overflow-auto p-3 mb-3 mb-md-0 mr-md-3" style=" max-height: 250px;">
                        <div class="rounded bg-red px-3 mb-3">
                            <h5 class="text-white text-title1 py-2">Memohon Gologan Darah Tipe A+</h5>
                            <div class="d-flex justify-content-between pb-3">
                                <p class="text-white text-body1">29/10.2021</p>
                                <p class="text-white text-body1">Menunggu Persetujuan</p>
                            </div>
                        </div>
                        <div class="rounded bg-primary px-3 mb-3">
                            <h5 class="text-white text-title1 py-2">Memohon Gologan Darah Tipe O+</h5>
                            <div class="d-flex justify-content-between pb-3">
                                <p class="text-white text-body1">29/10.2021</p>
                                <p class="text-white text-body1">Disetujui RS Surya Melati</p>
                            </div>
                        </div>
                        <div class="rounded bg-success px-3 mb-3">
                            <h5 class="text-white text-title1 py-2">Memohon Gologan Darah Tipe AB-</h5>
                            <div class="d-flex justify-content-between pb-3">
                                <p class="text-white text-body1">29/10.2021</p>
                                <p class="text-white text-body1">Diterima RS Surya Melati</p>
                            </div>
                        </div>
                        <div class="rounded bg-red-2 px-3 mb-3">
                            <h5 class="text-white text-title1 py-2">Memohon Gologan Darah Tipe B+</h5>
                            <div class="d-flex justify-content-between pb-3">
                                <p class="text-white text-body1">29/10.2021</p>
                                <p class="text-white text-body1">Ditolak</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card mb-4 mx-auto" style="width: 100%;">
                <div class="card-header py-3">
                    <div class="d-flex">
                        <h6 class="m-auto text-title1 text-red text-center"><span>
                                <svg width="28" height="24" viewBox="0 0 28 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
<path
    d="M19.9248 12.8333C23.9161 9.555 27.6748 6.48667 27.6748 3.85C27.6748 1.69167 25.8019 0 23.4123 0C22.069 0 20.7644 0.571667 19.9248 1.45833C19.0723 0.571667 17.7806 0 16.4373 0C14.0477 0 12.1748 1.69167 12.1748 3.85C12.1748 6.48667 15.9336 9.555 19.9248 12.8333ZM16.4373 2.33333C17.0056 2.33333 17.5869 2.57833 17.9615 2.975L19.9248 5.06333L21.8881 2.975C22.2627 2.57833 22.844 2.33333 23.4123 2.33333C24.3681 2.33333 25.0915 2.98667 25.0915 3.85C25.0915 5.15667 22.4565 7.54833 19.9248 9.67167C17.3931 7.54833 14.7581 5.145 14.7581 3.85C14.7581 2.98667 15.4815 2.33333 16.4373 2.33333Z"
    fill="#BA181B"/>
<path
    d="M23.7998 16.3333H21.2165C21.2165 14.9333 20.2477 13.6733 18.8011 13.1833L10.8444 10.5H0.549805V23.3333H8.2998V21.6533L17.3415 23.9167L27.6748 21V19.8333C27.6748 17.8967 25.944 16.3333 23.7998 16.3333ZM3.13314 21V12.8333H5.71647V21H3.13314ZM17.3027 21.4783L8.2998 19.2267V12.8333H10.3794L17.8969 15.365C18.3361 15.5167 18.6331 15.9017 18.6331 16.3333C18.6331 16.3333 16.0627 16.275 15.6623 16.1583L12.5881 15.2367L11.7744 17.4533L14.8486 18.375C15.5073 18.5733 16.1919 18.6783 16.8894 18.6783H23.7998C24.3036 18.6783 24.7556 18.9467 24.9623 19.3317L17.3027 21.4783Z"
    fill="#BA181B"/>
</svg>
                            </span>Sebagai Pendonor
                        </h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="overflow-auto p-3 mb-3 mb-md-0 mr-md-3" style=" max-height: 250px;">
                        <div class="rounded bg-red px-3 mb-3">
                            <h5 class="text-white text-title1 py-2">Permintaan Donor Darah</h5>
                            <div class="d-flex justify-content-between pb-3">
                                <p class="text-white text-body1">29/10.2021</p>
                                <p class="text-white text-body1">Menunggu Persetujuan</p>
                            </div>
                        </div>
                        <div class="rounded bg-primary px-3 mb-3">
                            <h5 class="text-white text-title1 py-2">Permintaan Donor Darah</h5>
                            <div class="d-flex justify-content-between pb-3">
                                <p class="text-white text-body1">29/10.2021</p>
                                <p class="text-white text-body1">Dijadwalkan RS Surya Melati</p>
                            </div>
                        </div>
                        <div class="rounded bg-success px-3 mb-3">
                            <h5 class="text-white text-title1 py-2">Permintaan Donor Darah</h5>
                            <div class="d-flex justify-content-between pb-3">
                                <p class="text-white text-body1">29/10.2021</p>
                                <p class="text-white text-body1">Diterima RS Surya Melati</p>
                            </div>
                        </div>
                        <div class="rounded bg-red-2 px-3 mb-3">
                            <h5 class="text-white text-title1 py-2">Permintaan Donor Darah</h5>
                            <div class="d-flex justify-content-between pb-3">
                                <p class="text-white text-body1">29/10.2021</p>
                                <p class="text-white text-body1">Ditolak</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-8 offset-md-2 mt-5 pt-4">
            <h3 class="text-blue font-weight-bold mb-4">Identitas Pribadi</h3>
            <form>
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="name" class="text-title1 text-blue">Nama Lengkap</label>
                    <input type="text" class="form-control mt-1 text-title1 text-blue" id="name" name="name"
                           placeholder="Nama Lengkap" required value="{{ auth()->user()->name_donators }}">
                </div>
                <div class="form-group mb-3">
                    <label for="gender" class="text-title1 text-blue">Jenis Kelamin</label>
                    <select class="custom-select text-title1 text-blue mt-1" id="gender" name="gender" required>
                        <option value="" disabled selected>Jenis Kelamin</option>
                        <option value="male" {{ (auth()->user()->gender_donators === "male") ? 'selected' : '' }}>Laki -
                            laki
                        </option>
                        <option value="female" {{ (auth()->user()->gender_donators === "female") ? 'selected' : '' }}>
                            Perempuan
                        </option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="bloodType" class="text-title1 text-blue">Golongan Darah</label>
                    <select class="custom-select text-title1 text-blue mt-1" id="bloodType" name="bloodType" required>
                        <option value="" disabled selected>Golongan Darah</option>
                        <option value="A" {{ (auth()->user()->blood_type_donators === "A") ? 'selected' : '' }}>A
                        </option>
                        <option value="B" {{ (auth()->user()->blood_type_donators === "B") ? 'selected' : '' }}>B
                        </option>
                        <option value="AB" {{ (auth()->user()->blood_type_donators === "AB") ? 'selected' : '' }}>AB
                        </option>
                        <option value="O" {{ (auth()->user()->blood_type_donators === "O") ? 'selected' : '' }}>O
                        </option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="rhesusType" class="text-title1 text-blue">Rhesus</label>
                    <select class="custom-select text-title1 text-blue mt-1" id="rhesusType" name="rhesusType" required>
                        <option value="" disabled selected>Rhesus</option>
                        <option
                            value="positive" {{ (auth()->user()->rhesus_type_donators === "positive") ? 'selected' : '' }} >
                            Positif (+)
                        </option>
                        <option
                            value="negatif" {{ (auth()->user()->rhesus_type_donators === "negative") ? 'selected' : '' }}>
                            Negatif (-)
                        </option>
                    </select>
                </div>
                <button class="btn bg-red text-white mt-4 w-25 text-title2" type="submit">Simpan</button>
            </form>
        </div>
        <div class="col-md-8 offset-md-2 mt-5 pt-4">
            <h3 class="text-blue font-weight-bold mb-4">Kontak</h3>
            <form>
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="email" class="text-title1 text-blue">Email</label>
                    <input type="email" class="form-control mt-1 text-title1 text-blue" id="email" name="email"
                           placeholder="Email" required value="{{ auth()->user()->email_donators }}">
                </div>
                <div class="form-group">
                    <label for="address" class="text-title1 text-blue">Alamat</label>
                    <textarea class="form-control text-title1 text-blue" id="address" name="address"
                              rows="3">{{ auth()->user()->address_donators }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="no_hp" class="text-title1 text-blue">No. Telp / WA</label>
                    <input type="text" class="form-control mt-1 text-title1 text-blue" id="no_hp" name="no_hp"
                           placeholder="No. Telp / WA" required value="{{ auth()->user()->contact_donators }}">
                </div>
                <button class="btn bg-red text-white mt-4 w-25 text-title2" type="submit">Simpan</button>
            </form>
        </div>
        <div class="col-md-8 offset-md-2 mt-5 pt-4">
            <h3 class="text-blue font-weight-bold mb-4">Ubah Password</h3>
            <form>
                @csrf
                @method("PUT")
                <label for="current_password" class="text-title1 text-blue">Password Lama</label>
                <div class="input-group mb-3" id="show_hide_password">
                    <input class="form-control text-title1 text-blue" type="password" name="current_password"
                           id="current_password"
                           placeholder="*****" required>
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                </div>
                <label for="password" class="text-title1 text-blue">Password Baru</label>
                <div class="input-group mb-3" id="show_hide_password">
                    <input class="form-control text-title1 text-blue" type="password" name="password" id="password"
                           placeholder="*****" required>
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                </div>
                <label for="recheck-password" class="text-title1 text-blue">Konfirmasi Password Baru</label>
                <div class="input-group mb-3" id="show_hide_password">
                    <input class="form-control text-title1 text-blue" type="password" id="recheck-password"
                           placeholder="*****" required>
                    <div class="input-group-append">
                        <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                                                                    aria-hidden="true"></i></a>
                    </div>
                </div>

                <button class="btn bg-red text-white mt-4 w-25 text-title2 mb-5" type="submit">Simpan</button>
            </form>
        </div>
    </div>
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-title1 text-blue text-truncate" id="detailModalLabel">Ubah Foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex flex-column">
                    @if(auth()->user()->profile_images_donators != null)
                        <img id="output" src="{{ auth()->user()->profile_images_donators }}"
                             class="rounded-circle mx-auto" width="300px"
                             height="300px" alt="avatar">
                    @else
                        <img id="output" src="{{ url('/images/avatar.jpg') }}" class="rounded-circle mx-auto"
                             width="300px"
                             height="300px" alt="avatar">
                    @endif
                    <form>
                        <div class="form-group mb-3">
                            <label for="ktp" class="text-title1 text-blue">Foto</label>
                            <div class="custom-file mt-1">
                                <input type="file" accept="image/jpeg,image/gif,image/png"
                                       class="custom-file-input" id="customFile" name="ktp" required
                                       onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                <label class="custom-file-label text-title1 text-blue" for="customFile">Choose
                                    file</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <form>
                        <input type="hidden" id="id_institutions">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-red text-white">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script src="{{ url('/js/show-password.js') }}"></script>
    <script src="{{ url('/js/check-password.js') }}"></script>
@endsection
