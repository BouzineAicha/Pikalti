<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/8ad36ff707.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/84697556e3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Document</title>
</head>
<body>
<?php include"nav.php";?>
    <div class="container">

      <div class="table-app" id="product-table-app">
        <div class="table-handler">
          <div class="table-handler-dropdown-cell">
            <div class="dropdown">
              <h3 class="dropdown-heading">
                <i class="fas fa-filter"></i> Brand
              </h3>
              <select
                class="select js-handle-table js-filter"
                id="filter-brand"
              >
                <option value="all">All</option>
              </select>
            </div>
          </div>

          <div class="table-handler-dropdown-cell">
            <div class="dropdown">
              <h3 class="dropdown-heading">
                <i class="fas fa-filter"></i> Category
              </h3>
              <select
                class="select js-handle-table js-filter"
                id="filter-category"
              >
                <option value="all">All</option>
              </select>
            </div>
          </div>

          <div class="table-handler-dropdown-cell">
            <div class="dropdown">
              <h3 class="dropdown-heading">
                <i class="fas fa-sort-amount-up-alt"></i> Sort by
              </h3>
              <select class="select js-handle-table" id="sort-by">
                <option value="none"> - </option>
                <option value="price">Price</option>
                <option value="created_at">Created at</option>
                <option value="updated_at">Updated at</option>
              </select>
            </div>
          </div>

          <div class="table-handler-dropdown-cell">
            <!-- TODO: add label and create style -->
            <input
              type="checkbox"
              class="js-handle-table"
              id="toggle"
              value="hiding-out-of-stock"
            />
            <label for="toggle">Hiding out-of-stock products</label>
          </div>
        </div>
        <!-- /.table-handler -->

        <div class="table-wrapper">
          <table class="table" id="table">
            <thead>
              <tr class="table-head">
                <th class="table-cell align-right"style="text-align:center;vertical-align: -webkit-baseline-middle;">ID</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;"> Image</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">Name</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">Description</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">Price per1h </th>
                <th class="table-cell align-right"style="text-align:center;vertical-align: -webkit-baseline-middle;">Quantity</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">Availablty</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">Category</th>
                
              </tr>
            </thead>

            <tbody>
            <tr >
                <?php
                  $sql = "SELECT * FROM `vehicle`";           
                      $result = $conn->query($sql);                                 
                foreach ($result as $row) {
                ?>
                  <td style="vertical-align: -webkit-baseline-middle;width:73px;text-align:center;"> <i class='fa fa-user 2x btn' style="font-size:15px ; color:#2f3449 ;"><?php echo $row["ID_Vehicle"] ?></i> </td>
               <td style="vertical-align: -webkit-baseline-middle;width:140px;text-align:center;" > <img src="images/<?php echo $row['img'] ?>"style="width:63px;" ></td>
                  <td style="vertical-align: -webkit-baseline-middle;width: 135px;text-align:center;"><?php echo $row["Name"] ?></td>
                  <td style="vertical-align: -webkit-baseline-middle;width: 239px;left: 119px;"> <a href="description.php? id=<?php echo $row["ID_Vehicle"]; ?>"> <i class='fa fa-edit 2x btn' style="font-size:20px ; color:#2f3449; display: table;border-collapse: collapse;border-spacing: 0; text-decoration: none; "></i> </a></td>
                  <td style="vertical-align: -webkit-baseline-middle;width: 209px;text-align:center;"><?php echo $row["daily_hour_Rate"] ?></td>
                  <td style="vertical-align: -webkit-baseline-middle;width: 176px;text-align:center;"><?php echo $row["quantity_stock"] ?></td>
                  <td style="vertical-align: -webkit-baseline-middle;width: 186px;text-align:center;"><?php echo $row["availablity"] ?></td>
                  <td style="vertical-align: -webkit-baseline-middle;width:140px;text-align:center;"><img src="images/<?php echo $row['img'] ?>"style="width:63px;" ></td>
              </tr>
            <?php
                }
                $conn->close();
            ?>

            </form>

            </tbody>
          </table>

          <div class="no-results hidden" id="no-results">
            <p class="no-results-message">
              No results found.
            </p>
          </div>
          <!-- /#no-results -->
        </div>
        <!-- /.table-wrapper -->
      </div>
      <!-- /.table-app -->
    </div>
    <!-- /.container -->
  <script>
    $(function () {
  new ProductTableApp({
    $el: $('#product-table-app'),
    url: 'https://gist.githubusercontent.com/yha-1228/dafe947f4437e83deb91136203cb1f2b/raw/2b8de5fb6126a51d750bfd38ef38464fdb44f8cf/products.json',
  })
})

/**
 * @param {jQuery object} options.$el
 * @param {String} options.url
 */
class ProductTableApp {
  constructor(options) {
    this.initState()
    this.defineElements(options.$el, this.state.products)
    this.render(this.state.products)
    this.fetchJson(options.url).then(
      (res) => {
        this.state.isLoaded = true
        this.state.products = res
        this.defineElements(options.$el, this.state.products)
        this.render(this.state.products)
        this.bindEvents()
      },
      (jqXHR) => {
        this.state.err = jqXHR
        console.log(`ERR! ${this.state.err.responseText}`)
      }
    )
  }

  initState() {
    this.state = { isLoaded: false, products: [], err: null }
  }

  /**
   * @param {String} url
   * @returns {Array}
   */
  fetchJson(url) {
    return $.ajax({
      url: url,
      dataType: 'json',
    })
  }

  /**
   *
   * @param {jQuery object} $el
   * @param {Array} products
   */
  defineElements($el, products) {
    const brands = [...new Set(products.map((product) => product.brand))]
    const categories = [...new Set(products.map((product) => product.category))]

    this.$el = $el
    this.$tbody = this.$el.find('tbody')
    this.$noResults = this.$el.find('#no-results')
    this.$handleTable = this.$el.find('.js-handle-table')
    this.$sortBy = this.$el.find('#sort-by')
    this.$filter = this.$el.find('.js-filter')
    this.$filterBrand = this.$el
      .find('#filter-brand')
      .append(
        brands.map((brand) => `<option value="${brand}">${brand}</option>`)
      )
    this.$filterCategory = this.$el
      .find('#filter-category')
      .append(
        categories.map(
          (category) => `<option value="${category}">${category}</option>`
        )
      )
    this.$hidingOutOfStock = this.$el.find('[value="hiding-out-of-stock"]')
  }

  bindEvents() {
    this.handleChange = this.handleChange.bind(this)
    this.$handleTable.on('change', this.handleChange)
  }

  handleChange() {
    const sorted = this.sort(this.state.products)
    const filtered = this.filter(sorted)
    const toggled = this.toggle(filtered)
    this.render(toggled)
  }

  /**
   * @param {Array} products
   * @returns {Array}
   */
  sort(products) {
    const $selectedSortTarget = this.$sortBy.find('option:selected')
    const val = $selectedSortTarget.val()

    // No sort
    if (val === 'none') {
      return products
    }

    // val: Number
    if (val === 'price') {
      return [...products].sort((a, b) => {
        if (a[val] < b[val]) {
          return -1
        }
        if (a[val] > b[val]) {
          return 1
        }
        return 0
      })
    }

    // val: String ('YYYY/MM/DD')
    if (val === 'created_at' || val === 'updated_at')
      return [...products].sort((a, b) => {
        /**
         * Convert 'YYYY/MM/DD' string to date
         * @param {String} dateString
         * @returns Date object
         */
        const toDate = (dateString) => {
          const momentObject = moment(dateString, 'YYYY/MM/DD')
          const dateObject = momentObject.toDate()
          return dateObject
        }

        if (toDate(a[val]) < toDate(b[val])) return -1
        if (toDate(a[val]) > toDate(b[val])) return 1
        return 0
      })
  }

  /**
   * @param {Array} products
   * @returns {Array}
   */
  filter(products) {
    const $selectedBrand = this.$filterBrand.find('option:selected')
    const $selectedCategory = this.$filterCategory.find('option:selected')

    /**
     * @param {Object} product
     */
    const isBrandValid = (product) => {
      return $selectedBrand.val() === 'all'
        ? product
        : product.brand === $selectedBrand.text()
    }

    /**
     * @param {Object} product
     */
    const isCategoryValid = (product) => {
      return $selectedCategory.val() === 'all'
        ? product
        : product.category === $selectedCategory.text()
    }

    return products.filter(isBrandValid).filter(isCategoryValid)
  }

  /**
   * @param {Array} products
   * @returns {Array}
   */
  toggle(products) {
    return this.$hidingOutOfStock.prop('checked')
      ? products.filter((product) => product.stocked === true)
      : products
  }

  render(products) {
    const twoSpace = '&nbsp;&nbsp;'

    if (!this.state.isLoaded) {
      this.$tbody.html('<div>Loading...</div>')
      return
    }

    this.$tbody.html(
      products.map(
        (product) =>
          `<tr class="table-row" data-key="${product.id}">
            <td class="table-cell align-right">${product.id}</td>
            <td class="table-cell align-left">${product.brand}</td>
            <td class="table-cell align-left">${product.name}</td>
            <td class="table-cell align-left">${product.category}</td>
            <td class="table-cell align-right">&yen; ${product.price}</td>
            <td class="table-cell align-left">${
              product.stocked
                ? `<i class="fas fa-check-circle light-text"></i>${twoSpace}In stock`
                : `<i class="fas fa-minus-circle light-text"></i>${twoSpace}Out of stock`
            }</td>
            <td class="table-cell align-left">${product.created_at}</td>
            <td class="table-cell align-left">${product.updated_at}</td>
          </tr>`
      )
    )

    products.length === 0
      ? this.$noResults.removeClass('hidden')
      : this.$noResults.addClass('hidden')
  }
}

  </script>

</body>
</html>