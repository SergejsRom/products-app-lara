## The expected outcome of the test**

### A web-app (accessible by an URL) containing two pages for:

1. Product list page
2. Adding a product page

## MUST HAVE for the list items:

- SKU (unique for each product)
- Name
- Price
- One of the product-specific attributes and its value
    - Size (in MB) for DVD-disc
    - Weight (in Kg) for Book
    - Dimensions (HxWxL) for Furniture
    
   ## Required UI elements:

- “ADD” button, which would lead to the “Product Add” page
- “MASS DELETE” action, implemented as checkboxes next to each product and a button “MASS DELETE” triggering delete action for the selected products.
- There should be no pagination for the listing, all items should be on the same page

## **Add product page requirements:**

- The form should be dynamically changed when the type is switched
- Special attributes should have a description, related to their type, e.g.: “Please, provide dimensions” / “Please, provide weight” / “Please, provide size” when related product type is selected
- All fields are mandatory for submission, missing values should trigger notification “Please, submit required data”
- Implement input field value validation, invalid data must trigger notification “Please, provide the data of indicated type”
- Notification messages should appear on the same page without reloading
- The page must have a “Save” button to save the product. Once saved, return to the “Product List” page with the new product added.
- The page must have a “Cancel” button to cancel adding the product action. Once canceled, returned to the “Product List” page with no new products added.
- No additional dialogues like “Are you sure you want to Save / Cancel?”
- SKU should be unique for each product and it shouldn’t be possible to save products if already any product with the same SKU exists.
