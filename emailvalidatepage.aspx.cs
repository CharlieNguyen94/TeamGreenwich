using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;
using System.Text.RegularExpressions;

namespace Email_validation
{
    public partial class _Default : System.Web.UI.Page
    {

        private void ValidateEmail()
        {
            string email = txtemail.Text;
            Regex regex = new Regex(@"^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$");
            Match match = regex.Match(email);
            if (match.Success)
                lbl_message.Text = email + " is Valid Email Address";
            else
                lbl_message.Text = email + " is Invalid Email Address";
        }

        protected void Validate_Click(object sender, EventArgs e)
        {
            ValidateEmail();
        }
    }
}