<!DOCTYPE html>
<html>

<head lang="en">
  <meta charset="utf-8" />
  <title>Timelpase Philippines</title>
  <!-- <script type="text/javascript" src="../../js/coolc.js"></script> -->
</head>

<body>
  <div class="container">
    <h2>Content Dashboard</h2>
    <div class="row voffset2">
      <div class="col-xs-12">
        <button class="btn btn-default btn-primary" id="addAction">
          <i class="fa fa-plus-circle" style="margin-right:5px;"></i>Add language
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 voffset2">
        <div class="panel panel-default" id="languagePanel">
          <div class="panel-body">
            <form id="languageForm" role="form">
              <fieldset>
                <div class="form-group col-xs-12 col-sm-3">
                  <label for="language" class="control-label" style="display: block;">Language</label>
                  <input type="text" name="language" id="language" >
                </div>
                <div class="form-group col-xs-12 col-sm-2">
                  <label for="native" class="control-label" style="display: block;">Native</label>
                  <input type="checkbox" id="native" name="native">
                </div>
                <div class="form-group col-xs-12 col-sm-3">
                  <label for="level" class="control-label" style="display: block;">Level</label>
                  <input type="text" name="level" id="level">
                </div>
                <div class="form-group col-xs-12 col-sm-4">
                  <label for="lookingFor" class="control-label" style="display: block;">Looking for</label>
                  <input type="text" name="lookingFor" id="lookingFor">
                </div>
                <div class="col-xs-12 col-md-4 col-md-offset-8">
                  <div>
                    <div class="btn-group pull-right">
                      <button type="button" id="editAddPanel-cancel" class="btn btn-default btn-warning" style="width:100px">Cancel</button>
                      <button type="button" id="editAddPanel-send" class="btn btn-default btn-primary" style="width:100px">Save</button>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row voffset2">
      <div class="col-xs-12">
        <table id="langTable" data-toggle="table" data-url="tabledata.json" data-sort-name="native" data-sort-order="desc" data-cache="false">
          <thead>
            <tr>
              <th data-field="id">id</th>
              <th data-field="language">Language</th>
              <th data-field="native" data-formatter="formatNativeItem" data-align="center">Native</th>
              <th data-field="level">Level</th>
              <th data-field="looking">Looking</th>
              <th data-field="operate" data-formatter="operateFormatter" data-align="center" data-events="operateEvents" data-width="100"></th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
