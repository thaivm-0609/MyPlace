<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<title>LoveKL's website</title>
<style rel="stylesheet" media="all">
  @yield('styles')
</style>
</head>

<body>
  <center>
    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
      <tr>
        <td align="center" valign="top" class="title">
          <table border="0" cellpadding="0" cellspacing="0" width="650px" class="wrapper">
            <tr>
              <td valign="top" class="pad-side">
                @hasSection('title')
                  @yield('title')
                @endif
              </td>
            </tr>

            <tr class="main">
              <td align="center" valign="top" class="pad-side">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                    <td valign="top" style="padding:15px 0;">
                      @yield('content')
                    </td>
                  </tr>

                  @hasSection('after-content')
                  <tr>
                    <td style="padding:15px 0;">
                      @yield('after-content')
                    </td>
                  </tr>
                  @endif
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>