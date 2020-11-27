<!doctype html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
        <link href="./style.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="first-step">
                <input type="file" name="file" id="file">

                <div class="upload-con">
                    <div class="sub-tit">Upload File</div>
                    <div class="desc">Please insert your sentence. Please insert your sentence.</div>
                    <div class="upload-area uploadfile">
                        <h3>Drag and Drop file here</h3>
                        <div class="btn main-btn">Upload</div>
                    </div>
                </div>
            </div>

            <div class="second-step">
                <div class="upload-con">
                    <div class="sub-tit">Upload File</div>
                    <div class="desc">Please insert your sentence. Please insert your sentence.</div>
                    <div class="file-con">
                        <div class="second circle">
                            <strong></strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="second-failed-step">
                <div class="upload-con">
                    <div class="sub-tit">Upload File</div>
                    <div class="desc">Please insert your sentence. Please insert your sentence.</div>
                    <div class="upload-area uploadfile">
                        <h3>Failed</h3>
                        <div class="btn main-btn">Upload Again</div>
                    </div>
                </div>
            </div>

            <div class="third-step success">
                <div class="result-content">
                    <div class="sub-tit">Upload File</div>
                    <div class="desc">Please insert your sentence. Please insert your sentence.</div>
                    <div class="result-con">
                        <div class="rc-left">
                            <div class="rc-img-con"><img src="./upload/images.png"></div>
                            <div class="rc-json-con">
                                test
                            </div>
                        </div>
                        <div class="rc-right">
                            <div class="result-tit">Result</div>
                            <div class="result-sub-tit">status: <span class="result-success">success</span></div>
                            <table class="rc-table">
                                <tr>
                                    <td>test</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>test</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>test</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>test</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>test</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>test</td>
                                    <td>test</td>
                                </tr>
                                <tr>
                                    <td>test</td>
                                    <td>test</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="third-step failed">
                <div class="result-content">
                    <div class="sub-tit">Upload File</div>
                    <div class="desc">Please insert your sentence. Please insert your sentence.</div>
                    <div class="result-con">
                        <div class="rc-left">
                            <div class="rc-img-con"><img src="./upload/images.png"></div>
                            <div class="rc-json-con">
                                test
                            </div>
                        </div>
                        <div class="rc-right">
                            <div class="result-tit">Result</div>
                            <div class="result-sub-tit">status : <span class="result-failed">failed</span></div>
                            <div class="error-msg">
                                <div class="error-msg-tit">Message : </div>
                                <div class="error-msg-con">
                                    <textarea class="form-control" readonly>test</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="./script.js" type="text/javascript"></script>
    </body>
</html>