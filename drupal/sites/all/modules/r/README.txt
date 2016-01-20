R is a free software environment for statistical computing and graphics. It compiles and runs on a wide variety of UNIX platforms, Windows and MacOS. 

The R Filter module is used to create an interface to the R Computer Algebra System (download from: http://www.r-project.org/).

This interface is created by means of a Drupal filter which may be enabled for a particular text format.

Place all R code between R square brackets: [R]rnorm(100,0,1);[/R].

GRANT FILTER ACCESS WITH CARE. It is NOT recommended to give anonymous users access to R filter. 

Demo at http://demo.tetragy.com/r

INSTALLATION

1. Download and decompress the tar or zip file from the R Filter project site (http://drupal.org/project/r) into the usual module directory (sites/all/modules).

2. Go to admin/modules and install the R Filter module.

3. Configure the module at admin/config/content/r.

4. Choose a text format which will execute the R code (Full HTML) and then enable the R Filter checkbox at: admin/config/content/formats/full_html. Your path may be different depending on the format you choose.

UNINSTALL

1. Go to admin/modules, deselect the R Filter checkbox, and submit the form.

2. Browse to admin/modules/uninstall, select the R Filter checkbox, and submit the form.

--
This module is sponsored by Tetragy Limited.

http://tetragy.com
