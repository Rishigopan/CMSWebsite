<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>JavaScript Image Cropping with DropzoneJS</title>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.css" integrity="sha512-C4k/QrN4udgZnXStNFS5osxdhVECWyhMsK1pnlk+LkC7yJGCqoYxW4mH3/ZXLweODyzolwdWSqmmadudSHMRLA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.js" integrity="sha512-LjPH94gotDTvKhoxqvR5xR2Nur8vO5RKelQmG52jlZo7SwI5WLYwDInPn1n8H9tR0zYqTqfNxWszUEy93cHHwg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>


    <!-- <form id="upload-form" class="dropzone">








        Now setup your input fields
        <input type="email" name="username" />
        <input type="password" name="password" />

        <button type="submit">Submit data and files!</button>
    </form> -->

    <!-- this is were the previews should be shown. -->
    <!-- <div class="previews"></div> -->


    <div class="mt-4 mb-5 UploadInnerDiv dropzone" id="profileWatermark">


        <input type="text" name="ImageTitle" id="image_title">
        <input type="text" name="ImageDesc" id="image_desc">


        <button type="submit">Submit data and files!</button>







        <script>
            // Dropzone.options.myDropzone = {
            //     url: 'TestUpload.php',
            //     transformFile: function(file, done) {
            //         // Create Dropzone reference for use in confirm button click handler
            //         var myDropZone = this;
            //         // Create the image editor overlay
            //         var editor = document.createElement('div');
            //         editor.style.position = 'fixed';
            //         editor.style.left = 0;
            //         editor.style.right = 0;
            //         editor.style.top = 0;
            //         editor.style.bottom = 0;
            //         editor.style.zIndex = 9999;
            //         editor.style.backgroundColor = '#000';
            //         document.body.appendChild(editor);
            //         // Create confirm button at the top left of the viewport
            //         var buttonConfirm = document.createElement('button');
            //         buttonConfirm.style.position = 'absolute';
            //         buttonConfirm.style.left = '10px';
            //         buttonConfirm.style.top = '10px';
            //         buttonConfirm.style.zIndex = 9999;
            //         buttonConfirm.textContent = 'Confirm';
            //         editor.appendChild(buttonConfirm);
            //         buttonConfirm.addEventListener('click', function() {
            //             // Get the canvas with image data from Cropper.js
            //             var canvas = cropper.getCroppedCanvas({
            //                 width: 256,
            //                 height: 256
            //             });
            //             // Turn the canvas into a Blob (file object without a name)
            //             canvas.toBlob(function(blob) {
            //                 // Create a new Dropzone file thumbnail
            //                 myDropZone.createThumbnail(
            //                     blob,
            //                     myDropZone.options.thumbnailWidth,
            //                     myDropZone.options.thumbnailHeight,
            //                     myDropZone.options.thumbnailMethod,
            //                     false,
            //                     function(dataURL) {

            //                         // Update the Dropzone file thumbnail
            //                         myDropZone.emit('thumbnail', file, dataURL);
            //                         // Return the file to Dropzone
            //                         done(blob);
            //                     });
            //             });
            //             // Remove the editor from the view
            //             document.body.removeChild(editor);
            //         });
            //         // Create an image node for Cropper.js
            //         var image = new Image();
            //         image.src = URL.createObjectURL(file);
            //         editor.appendChild(image);

            //         // Create Cropper.js
            //         var cropper = new Cropper(image, {
            //             aspectRatio: 1
            //         });
            //     }
            // };




            // Dropzone.options.uploadForm = { // The camelized version of the ID of the form element

            //     url: 'TestUpload.php',
            //     autoProcessQueue: false,
            //     uploadMultiple: true,
            //     parallelUploads: 100,
            //     maxFiles: 100,

            //     // The setting up of the dropzone
            //     init: function() {
            //         var myDropzone = this;

            //         // First change the button to actually tell Dropzone to process the queue.
            //         this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
            //             // Make sure that the form isn't actually being sent.
            //             e.preventDefault();
            //             e.stopPropagation();
            //             myDropzone.processQueue();
            //         });

            //         // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
            //         // of the sending event because uploadMultiple is set to true.
            //         this.on("sendingmultiple", function() {
            //             // Gets triggered when the form is actually being sent.
            //             // Hide the success button or the complete form.
            //         });
            //         this.on("successmultiple", function(files, response) {
            //             // Gets triggered when the files have successfully been sent.
            //             // Redirect user or notify of success.
            //             console.log("hello");
            //         });
            //         this.on("errormultiple", function(files, response) {
            //             // Gets triggered when there was an error sending the files.
            //             // Maybe show form again, and notify user of error
            //         });
            //     }

            // }


            Dropzone.autoDiscover = false;


            //Profile with watermark
            var myDropzone = new Dropzone("#profileWatermark", {
                paramName: "ImageGallery", // The name that will be used to transfer the file
                // addRemoveLinks: true,
                uploadMultiple: true,
                autoProcessQueue: false,
                parallelUploads: 50,
                // maxFilesize: jsonData.maxFileSizeMB, // MB
                headers: {
                    "HY": "header value"
                },
                acceptedFiles: ".png, .jpeg, .jpg",
                url: "TestUpload.php",

                transformFile: function(file, done) {

                    var myDropZone = this;

                    // Create the image editor overlay
                    var editor = document.createElement('div');
                    editor.style.position = 'fixed';
                    editor.style.left = 0;
                    editor.style.right = 0;
                    editor.style.top = 0;
                    editor.style.bottom = 0;
                    editor.style.zIndex = 9999;
                    editor.style.backgroundColor = '#000';

                    // Create the confirm button
                    var confirm = document.createElement('button');
                    confirm.style.position = 'absolute';
                    confirm.style.left = '10px';
                    confirm.style.top = '10px';
                    confirm.style.zIndex = 9999;
                    confirm.textContent = 'Confirm';
                    confirm.addEventListener('click', function() {

                        // Get the canvas with image data from Cropper.js
                        var canvas = cropper.getCroppedCanvas({
                            width: 256,
                            height: 256
                        });

                        // Turn the canvas into a Blob (file object without a name)
                        canvas.toBlob(function(blob) {

                            // Update the image thumbnail with the new image data
                            myDropZone.createThumbnail(
                                blob,
                                myDropZone.options.thumbnailWidth,
                                myDropZone.options.thumbnailHeight,
                                myDropZone.options.thumbnailMethod,
                                false,
                                function(dataURL) {

                                    // Update the Dropzone file thumbnail
                                    myDropZone.emit('thumbnail', file, dataURL);

                                    // Return modified file to dropzone
                                    done(blob);
                                }
                            );

                        });

                        // Remove the editor from view
                        editor.parentNode.removeChild(editor);

                    });
                    editor.appendChild(confirm);

                    // Load the image
                    var image = new Image();
                    image.src = URL.createObjectURL(file);
                    editor.appendChild(image);

                    // Append the editor to the page
                    document.body.appendChild(editor);

                    // Create Cropper.js and pass image
                    var cropper = new Cropper(image, {
                        aspectRatio: 1
                    });

                },



                // The setting up of the dropzone
                init: function() {
                    var myDropzone = this;

                    // First change the button to actually tell Dropzone to process the queue.
                    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                        // Make sure that the form isn't actually being sent.
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                    });

                    // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                    // of the sending event because uploadMultiple is set to true.
                    this.on("sendingmultiple", function(data, xhr, formData) {
                        // Gets triggered when the form is actually being sent.
                        // Hide the success button or the complete form.
                        formData.append("ImageTitle", $('#image_title').val());
                        formData.append("ImageDesc", $('#image_desc').val());
                        console.log("hello");
                    });
                    this.on("successmultiple", function(files, response) {
                        // Gets triggered when the files have successfully been sent.
                        // Redirect user or notify of success.
                        console.log(response);
                    });
                    this.on("errormultiple", function(files, response) {
                        // Gets triggered when there was an error sending the files.
                        // Maybe show form again, and notify user of error
                        console.log("heo");
                    });
                }




            }); // end new Dropzones
        </script>






</body>

</html>