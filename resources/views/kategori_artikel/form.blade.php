@csrf
						<<div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" required>

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

								<input id="user_id" type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="users_id" value="{{ Auth::id()}}" required autofocus>

						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-sm btn-primary">
									{{ _('simpan') }}
								</button>
								<a href="{!! route('kategori_artikel.index')!!}" class="btn btn-sm btn danger">Batal </a>
								></td>
							</div>
						</div>		