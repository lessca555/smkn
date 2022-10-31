@extends('layout.app')
@section('content')

<div class="row">
    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Soal UTS
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table
                        id="example"
                        class="table table-striped data-table"
                        style="width: 100%"
                    >
                        <thead>
                            <tr>
                                <th>ID Soal</th>
                                <th>Nama Paket</th>
                                <th>Deskripsi</th>
                                <th>Jenis Soal</th>
                                <th>KKM</th>
                                <th>Waktu</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>a</td>
                                <td>kntl</td>
                                <td>uts</td>
                                <td>70</td>
                                <td>60 menit</td>
                                <td>
                                    <button class="btn btn-primary" style="font-size: 10px;" id="kerjakan" onclick="openFullscreen()">Kerjakan</button>
                                </td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>ID Soal</th>
                                <th>Nama Paket</th>
                                <th>Deskripsi</th>
                                <th>Jenis Soal</th>
                                <th>KKM</th>
                                <th>Waktu</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div id="soal" class="soal">

                    <div class="col-sm-12">
                        <div class="mm-survey">

                            <div class="mm-survey-progress">
                                <div class="mm-survey-progress-bar mm-progress"></div>
                            </div>

                            <div class="mm-survey-results">
                                <div class="mm-survey-results-container">
                                    <h3 class="mm-survey-results-score"></h3>
                                    <ul class="mm-survey-results-list"></ul>
                                </div>
                                
                                <div class="mm-survey-results-controller">
                                    <div class="mm-back-btn">
                                        <button>Back</button>
                                    </div>

                                    <div class="mm-quit-btn">
                                        <button onclick="closeFullscreen()" class="btn btn-danger">Quit</button>
                                    </div>
                                </div>
                            </div>

                            <div class="mm-survey-bottom">
                                <div class="mm-survey-container">

                                    <div class="mm-survey-page active" data-page="1">
                                        <div class="mm-survery-content">
                                            <div class="mm-survey-question">
                                                <p>Get lost?</p>
                                            </div>
                                            <div class="mm-survey-item">
                                                <input type="radio" id="radio01" data-item="1" name="radio1" value="red" />
                                                <label for="radio01"><span></span><p>Yes</p></label>
                                            </div>
                                            <div class="mm-survey-item">
                                                <input type="radio" id="radio02" data-item="1" name="radio1" value="blue" />
                                                <label for="radio02"><span></span><p>No</p></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mm-survey-page" data-page="2">
                                        <div class="mm-survery-content">
                                            <div class="mm-survey-question">
                                                <p>Drive slowly?</p>
                                            </div>
                                            <div class="mm-survey-item">
                                                <input type="radio" id="radio05" data-item="2" name="radio2" value="honda" />
                                                <label for="radio05"><span></span><p>Yes</p></label>
                                            </div>
                                            <div class="mm-survey-item">
                                                <input type="radio" id="radio06" data-item="2" name="radio2" value="ford" />
                                                <label for="radio06"><span></span><p>No</p></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mm-survey-page" data-page="3">
                                        <div class="mm-survery-content">
                                            <div class="mm-survey-question">
                                                <p>Drive slowly?</p>
                                            </div>
                                            <div class="mm-survey-item">
                                                <input type="radio" id="radio05" data-item="2" name="radio2" value="honda" />
                                                <label for="radio05"><span></span><p>Yes</p></label>
                                            </div>
                                            <div class="mm-survey-item">
                                                <input type="radio" id="radio06" data-item="2" name="radio2" value="ford" />
                                                <label for="radio06"><span></span><p>No</p></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mm-survey-page" data-page="4">
                                            <div class="mm-survery-content">
                                            <div class="mm-survey-question">
                                                <p>Drive slowly?</p>
                                            </div>
                                            <div class="mm-survey-item">
                                                <input type="radio" id="radio05" data-item="2" name="radio2" value="honda" />
                                                <label for="radio05"><span></span><p>Yes</p></label>
                                            </div>
                                            <div class="mm-survey-item">
                                                <input type="radio" id="radio06" data-item="2" name="radio2" value="ford" />
                                                <label for="radio06"><span></span><p>No</p></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mm-survey-page" data-page="5">
                                        <div class="mm-survery-content">
                                            <div class="mm-survey-question">
                                                <p>Drive slowly?</p>
                                            </div>
                                            <div class="mm-survey-item">
                                                <input type="radio" id="radio05" data-item="2" name="radio2" value="honda" />
                                                <label for="radio05"><span></span><p>Yes</p></label>
                                            </div>
                                            <div class="mm-survey-item">
                                                <input type="radio" id="radio06" data-item="2" name="radio2" value="ford" />
                                                <label for="radio06"><span></span><p>No</p></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mm-survey-page" data-page="6">
                                        <div class="mm-survery-content">
                                            <div class="mm-survery-content">
                                                <div class="mm-survey-question">
                                                    <p>Drive slowly?</p>
                                                </div>
                                                <div class="mm-survey-item">
                                                    <input type="radio" id="radio05" data-item="2" name="radio2" value="honda" />
                                                    <label for="radio05"><span></span><p>Yes</p></label>
                                                </div>
                                                <div class="mm-survey-item">
                                                    <input type="radio" id="radio06" data-item="2" name="radio2" value="ford" />
                                                    <label for="radio06"><span></span><p>No</p></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mm-survey-page" data-page="7">
                                        <div class="mm-survery-content">
                                            <div class="mm-survery-content">
                                                <div class="mm-survey-question">
                                                    <p>Drive slowly?</p>
                                                </div>
                                                <div class="mm-survey-item">
                                                    <input type="radio" id="radio05" data-item="2" name="radio2" value="honda" />
                                                    <label for="radio05"><span></span><p>Yes</p></label>
                                                </div>
                                                <div class="mm-survey-item">
                                                    <input type="radio" id="radio06" data-item="2" name="radio2" value="ford" />
                                                    <label for="radio06"><span></span><p>No</p></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mm-survey-controller">
                                        <div class="mm-prev-btn">
                                            <button>Prev</button>
                                        </div>
                                        <div class="mm-next-btn">
                                            <button disabled="true">Next</button>
                                        </div>
                                        <div class="mm-finish-btn">
                                            <button>Submit</button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
