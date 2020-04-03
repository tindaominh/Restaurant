define({ "api": [
  {
    "group": "Customer",
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/CustomerController.php",
    "groupTitle": "Customer",
    "name": ""
  },
  {
    "type": "delete",
    "url": "/customer/{id}",
    "title": "V Delete Customer information",
    "name": "deleteCustomer",
    "group": "Customer",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 No Content",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/http/controllers/api/CustomerController.php",
    "groupTitle": "Customer",
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Record Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "sampleRequest": [
      {
        "url": "http://localhost:8888/restaurant/api/customer"
      }
    ],
    "type": "get",
    "url": "/customer",
    "title": "I Get Customer information",
    "name": "getCustomer",
    "group": "Customer",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/CustomerController.php",
    "groupTitle": "Customer",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": "<p>id of customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "order_id",
            "description": "<p>id of order.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "so_ban",
            "description": "<p>table number.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "vi_tri",
            "description": "<p>number of the table.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "trang_thai",
            "description": "<p>status for customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "tong_tien",
            "description": "<p>Total of the customer.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\": 1,\n  \"order_id\": 2,\n  \"so_ban\": 2,\n  \"vi_tri\": 1,\n  \"trang_thai\": 1,\n  \"tong_tien\": 450000\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Customer Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "get",
    "url": "/customer/{id}",
    "title": "II Get Customer ID information",
    "name": "getCustomerID",
    "group": "Customer",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/CustomerController.php",
    "groupTitle": "Customer",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": "<p>id of customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "order_id",
            "description": "<p>id of order.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "so_ban",
            "description": "<p>table number.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "vi_tri",
            "description": "<p>number of the table.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "trang_thai",
            "description": "<p>status for customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "tong_tien",
            "description": "<p>Total of the customer.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\": 1,\n  \"order_id\": 2,\n  \"so_ban\": 2,\n  \"vi_tri\": 1,\n  \"trang_thai\": 1,\n  \"tong_tien\": 450000\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Record Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "post",
    "url": "/customer",
    "title": "III Create new Customer information",
    "name": "postCustomer",
    "group": "Customer",
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 500 error",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/http/controllers/api/CustomerController.php",
    "groupTitle": "Customer",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "order_id",
            "description": "<p>id of order.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "so_ban",
            "description": "<p>table number.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "vi_tri",
            "description": "<p>number of the table.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "trang_thai",
            "description": "<p>status for customer.</p>"
          },
          {
            "group": "Parameter",
            "type": "double",
            "optional": false,
            "field": "tong_tien",
            "description": "<p>Total of the customer.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": "<p>id of customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "order_id",
            "description": "<p>id of order.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "so_ban",
            "description": "<p>table number.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "vi_tri",
            "description": "<p>number of the table.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "trang_thai",
            "description": "<p>status for customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "tong_tien",
            "description": "<p>Total of the customer.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\": 1,\n  \"order_id\": 2,\n  \"so_ban\": 2,\n  \"vi_tri\": 1,\n  \"trang_thai\": 1,\n  \"tong_tien\": 450000\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "put",
    "url": "/customer/{id}",
    "title": "IV Modify Customer information",
    "name": "putCustomer",
    "group": "Customer",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/CustomerController.php",
    "groupTitle": "Customer",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "order_id",
            "description": "<p>id of order.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "so_ban",
            "description": "<p>table number.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "vi_tri",
            "description": "<p>number of the table.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "trang_thai",
            "description": "<p>status for customer.</p>"
          },
          {
            "group": "Parameter",
            "type": "double",
            "optional": true,
            "field": "tong_tien",
            "description": "<p>Total of the customer.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": "<p>id of customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "order_id",
            "description": "<p>id of order.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "so_ban",
            "description": "<p>table number.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "vi_tri",
            "description": "<p>number of the table.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "trang_thai",
            "description": "<p>status for customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "tong_tien",
            "description": "<p>Total of the customer.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\": 1,\n  \"order_id\": 2,\n  \"so_ban\": 2,\n  \"vi_tri\": 1,\n  \"trang_thai\": 1,\n  \"tong_tien\": 450000\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Record Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Menu",
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/MenuController.php",
    "groupTitle": "Menu",
    "name": ""
  },
  {
    "type": "delete",
    "url": "/menu/{id}",
    "title": "V Delete Menu information",
    "name": "deleteMenu",
    "group": "Menu",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 No Content",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/http/controllers/api/MenuController.php",
    "groupTitle": "Menu",
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Record Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "get",
    "url": "/menu",
    "title": "I Get Menu information",
    "name": "getMenu",
    "group": "Menu",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/MenuController.php",
    "groupTitle": "Menu",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "menu_name",
            "description": "<p>Name of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "menu_price",
            "description": "<p>price of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "menu_image",
            "description": "<p>image of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "menu_active",
            "description": "<p>status of the menu.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\": 1,\n  \"menu_name\": \"Gà nướng\",\n   \"menu_price\": 150000,\n   \"menu_image\": \"ganuong.png\",\n   \"menu_active\": 1\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Menu Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "get",
    "url": "/menu/{id}",
    "title": "II Get Menu ID information",
    "name": "getMenuID",
    "group": "Menu",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/MenuController.php",
    "groupTitle": "Menu",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "menu_name",
            "description": "<p>Name of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "menu_price",
            "description": "<p>price of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "menu_image",
            "description": "<p>image of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "menu_active",
            "description": "<p>status of the menu.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\": 1,\n  \"menu_name\": \"Gà nướng\",\n   \"menu_price\": 150000,\n   \"menu_image\": \"ganuong.png\",\n   \"menu_active\": 1\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Record Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "post",
    "url": "/menu",
    "title": "III Create new Menu information",
    "name": "postMenu",
    "group": "Menu",
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 500 error",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/http/controllers/api/MenuController.php",
    "groupTitle": "Menu",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "menu_name",
            "description": "<p>Name of the menu.</p>"
          },
          {
            "group": "Parameter",
            "type": "double",
            "optional": false,
            "field": "menu_price",
            "description": "<p>price of the menu.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "menu_image",
            "description": "<p>image of the menu.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "menu_active",
            "description": "<p>status of the menu.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "menu_name",
            "description": "<p>Name of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "menu_price",
            "description": "<p>price of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "menu_image",
            "description": "<p>image of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "menu_active",
            "description": "<p>status of the menu.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\": 1,\n  \"menu_name\": \"Gà nướng\",\n   \"menu_price\": 150000,\n   \"menu_image\": \"ganuong.png\",\n   \"menu_active\": 1\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "put",
    "url": "/menu/{id}",
    "title": "IV Modify Menu information",
    "name": "putMenu",
    "group": "Menu",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/MenuController.php",
    "groupTitle": "Menu",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "menu_name",
            "description": "<p>Name of the menu.</p>"
          },
          {
            "group": "Parameter",
            "type": "double",
            "optional": true,
            "field": "menu_price",
            "description": "<p>price of the menu.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "menu_image",
            "description": "<p>image of the menu.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "menu_active",
            "description": "<p>status of the menu.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "menu_name",
            "description": "<p>Name of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "menu_price",
            "description": "<p>price of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "menu_image",
            "description": "<p>image of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "menu_active",
            "description": "<p>status of the menu.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\": 1,\n  \"menu_name\": \"Gà nướng\",\n   \"menu_price\": 150000,\n   \"menu_image\": \"ganuong.png\",\n   \"menu_active\": 1\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Record Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Order",
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/OrderController.php",
    "groupTitle": "Order",
    "name": ""
  },
  {
    "type": "delete",
    "url": "/order/{id}",
    "title": "V Delete Menu information",
    "name": "deleteOrder",
    "group": "Order",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 No Content",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/http/controllers/api/OrderController.php",
    "groupTitle": "Order",
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Record Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "get",
    "url": "/order",
    "title": "I Get Order information",
    "name": "getOrder",
    "group": "Order",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/OrderController.php",
    "groupTitle": "Order",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": "<p><code>id</code> of order.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_id",
            "description": "<p><code>id</code> of customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "menu_id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "so_luong",
            "description": "<p>number of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "ghi_chu",
            "description": "<p>note for order.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "tong_tien",
            "description": "<p>Total of the menu.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\": 1,\n  \"customer_id\": 1,\n  \"menu_id\": 1,\n  \"so_luong\": 2,\n  \"ghi_chu\": \"Chưa ghi chú\",\n  \"tong_tien\": 150000\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Order Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "get",
    "url": "/order/{id}",
    "title": "II Get Order ID information",
    "name": "getOrderID",
    "group": "Order",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/OrderController.php",
    "groupTitle": "Order",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": "<p><code>id</code> of order.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_id",
            "description": "<p><code>id</code> of customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "menu_id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "so_luong",
            "description": "<p>number of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "ghi_chu",
            "description": "<p>note for order.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "tong_tien",
            "description": "<p>Total of the menu.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\": 1,\n  \"customer_id\": 1,\n  \"menu_id\": 1,\n  \"so_luong\": 2,\n  \"ghi_chu\": \"Chưa ghi chú\",\n  \"tong_tien\": 150000\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Record Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "post",
    "url": "/order",
    "title": "III Create new Order information",
    "name": "postOrder",
    "group": "Order",
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 500 error",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/http/controllers/api/OrderController.php",
    "groupTitle": "Order",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "customer_id",
            "description": "<p><code>id</code> of customer.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "menu_id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "so_luong",
            "description": "<p>number of the menu.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "ghi_chu",
            "description": "<p>note for order.</p>"
          },
          {
            "group": "Parameter",
            "type": "double",
            "optional": false,
            "field": "tong_tien",
            "description": "<p>Total of the menu.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": "<p><code>id</code> of order.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_id",
            "description": "<p><code>id</code> of customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "menu_id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "so_luong",
            "description": "<p>number of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "ghi_chu",
            "description": "<p>note for order.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "tong_tien",
            "description": "<p>Total of the menu.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\": 1,\n  \"customer_id\": 1,\n  \"menu_id\": 1,\n  \"so_luong\": 2,\n  \"ghi_chu\": \"Chưa ghi chú\",\n  \"tong_tien\": 150000\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "put",
    "url": "/order/{id}",
    "title": "IV Modify Order information",
    "name": "putOrder",
    "group": "Order",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/OrderController.php",
    "groupTitle": "Order",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "customer_id",
            "description": "<p><code>id</code> of customer.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "menu_id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "so_luong",
            "description": "<p>number of the menu.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "ghi_chu",
            "description": "<p>note for order.</p>"
          },
          {
            "group": "Parameter",
            "type": "double",
            "optional": true,
            "field": "tong_tien",
            "description": "<p>Total of the menu.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": "<p><code>id</code> of order.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_id",
            "description": "<p><code>id</code> of customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "menu_id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "so_luong",
            "description": "<p>number of the menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "ghi_chu",
            "description": "<p>note for order.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "tong_tien",
            "description": "<p>Total of the menu.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\": 1,\n  \"customer_id\": 1,\n  \"menu_id\": 1,\n  \"so_luong\": 2,\n  \"ghi_chu\": \"Chưa ghi chú\",\n  \"tong_tien\": 150000\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Record Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Payment",
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/PaymentController.php",
    "groupTitle": "Payment",
    "name": ""
  },
  {
    "type": "delete",
    "url": "/payment/{id}",
    "title": "V Delete Payment information",
    "name": "deletePayment",
    "group": "Payment",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 No Content",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/http/controllers/api/PaymentController.php",
    "groupTitle": "Payment",
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Record Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "get",
    "url": "/payment",
    "title": "I Get Payment information",
    "name": "getPayment",
    "group": "Payment",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/PaymentController.php",
    "groupTitle": "Payment",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "payment_id",
            "description": "<p><code>id</code> of payment.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_id",
            "description": "<p><code>id</code> of customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_soban",
            "description": "<p>table number of the customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_vitri",
            "description": "<p>number of the table of the customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "menu_id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "payment_total",
            "description": "<p>Total price of the customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "payment_active",
            "description": "<p>status of the payment.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"payment_id\": 35,\n   \"customer_id\": 1,\n   \"customer_soban\": 5,\n   \"customer_vitri\": 1,\n   \"menu_id\": 2,\n   \"payment_total\": \"150000\",\n   \"payment_active\": 1\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Customer Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "get",
    "url": "/payment/{id}",
    "title": "II Get Payment ID information",
    "name": "getPaymentID",
    "group": "Payment",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/PaymentController.php",
    "groupTitle": "Payment",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "payment_id",
            "description": "<p><code>id</code> of payment.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_id",
            "description": "<p><code>id</code> of customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_soban",
            "description": "<p>table number of the customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_vitri",
            "description": "<p>number of the table of the customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "menu_id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "payment_total",
            "description": "<p>Total price of the customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "payment_active",
            "description": "<p>status of the payment.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"payment_id\": 35,\n   \"customer_id\": 1,\n   \"customer_soban\": 5,\n   \"customer_vitri\": 1,\n   \"menu_id\": 2,\n   \"payment_total\": \"150000\",\n   \"payment_active\": 1\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Record Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "post",
    "url": "/payment",
    "title": "III Create new Payment information",
    "name": "postPayment",
    "group": "Payment",
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 500 error",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/http/controllers/api/PaymentController.php",
    "groupTitle": "Payment",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "customer_id",
            "description": "<p><code>id</code> of customer.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "customer_soban",
            "description": "<p>table number of the customer.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "customer_vitri",
            "description": "<p>number of the table of the customer.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "menu_id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Parameter",
            "type": "double",
            "optional": false,
            "field": "payment_total",
            "description": "<p>Total price of the customer.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "payment_active",
            "description": "<p>status of the payment.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "payment_id",
            "description": "<p><code>id</code> of payment.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_id",
            "description": "<p><code>id</code> of customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_soban",
            "description": "<p>table number of the customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_vitri",
            "description": "<p>number of the table of the customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "menu_id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "payment_total",
            "description": "<p>Total price of the customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "payment_active",
            "description": "<p>status of the payment.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"payment_id\": 35,\n   \"customer_id\": 1,\n   \"customer_soban\": 5,\n   \"customer_vitri\": 1,\n   \"menu_id\": 2,\n   \"payment_total\": \"150000\",\n   \"payment_active\": 1\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "put",
    "url": "/payment/{id}",
    "title": "IV Modify Payment information",
    "name": "putPayment",
    "group": "Payment",
    "version": "0.0.0",
    "filename": "app/http/controllers/api/PaymentController.php",
    "groupTitle": "Payment",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "customer_id",
            "description": "<p><code>id</code> of customer.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "customer_soban",
            "description": "<p>table number of the customer.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "customer_vitri",
            "description": "<p>number of the table of the customer.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "menu_id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Parameter",
            "type": "double",
            "optional": true,
            "field": "payment_total",
            "description": "<p>Total price of the customer.</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": true,
            "field": "payment_active",
            "description": "<p>status of the payment.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "payment_id",
            "description": "<p><code>id</code> of payment.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_id",
            "description": "<p><code>id</code> of customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_soban",
            "description": "<p>table number of the customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "customer_vitri",
            "description": "<p>number of the table of the customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "menu_id",
            "description": "<p><code>id</code> of menu.</p>"
          },
          {
            "group": "Success 200",
            "type": "double",
            "optional": false,
            "field": "payment_total",
            "description": "<p>Total price of the customer.</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "payment_active",
            "description": "<p>status of the payment.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"payment_id\": 35,\n   \"customer_id\": 1,\n   \"customer_soban\": 5,\n   \"customer_vitri\": 1,\n   \"menu_id\": 2,\n   \"payment_total\": \"150000\",\n   \"payment_active\": 1\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 404 Not Found\n{\n  \"error\": \"Record Not Found!\"\n}",
          "type": "json"
        }
      ]
    }
  }
] });
