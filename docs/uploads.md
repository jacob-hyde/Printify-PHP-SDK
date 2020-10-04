### Uploads
----

Endpoint Class: `PrintifyImage`
```
use Printify\PrintifyImage;
$printify_image = new PrintifyImage($printify_api, <Shop ID>);
```
**Requires Shop ID**

----

* Retrieve a list of uploaded images
  `$all_images = $printify_images->all($query_options)`
  **Parameters**
  (optional) 
  ```
  $query_options = [
    'limit' => 100,
    'page' => 1
  ]
  ```
  Output:
  ```
    {
            "id": "5e16d66791287a0006e522b2",
            "file_name": "png-images-logo-1.jpg",
            "height": 5979,
            "width": 17045,
            "size": 1138575,
            "mime_type": "image/png",
            "preview_url": "https://example.com/image-storage/uuid1",
            "upload_time": "2020-01-09 07:29:43"
        },
        {
            "id": "5de50bf612c348000892b366",
            "file_name": "png-images-logo-2.jpg",
            "height": 360,
            "width": 360,
            "size": 19589,
            "mime_type": "image/jpeg",
            "preview_url": "https://example.com/image-storage/uuid2",
            "upload_time": "2019-12-02 13:04:54"
        }
  ```
* Retrieve an uploaded image by id
  `$image = $printify_images->find('5e16d66791287a0006e522b2')`
  Output:
  ```
    {
        "id": "5e16d66791287a0006e522b2",
        "file_name": "png-images-logo-1.jpg",
        "height": 5979,
        "width": 17045,
        "size": 1138575,
        "mime_type": "image/png",
        "preview_url": "https://example.com/image-storage/uuid1",
        "upload_time": "2020-01-09 07:29:43"
    }
  ```
