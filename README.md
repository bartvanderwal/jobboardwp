# JobBoardWP - Job Board Listings and Submissions

- *Contributors*: ultimatemember, nsinelnikov
Tags: job, job board, job portal, job listing, job manager
Requires at least: 5.3
Tested up to: 5.8
Stable tag: 1.1.1
Requires PHP: 5.6
License: GNU Version 2 or Any Later Version
License URI: http://www.gnu.org/licenses/gpl-3.0.txt
Author URI: https://jobboardwp.com/
Plugin URI: https://wordpress.org/plugins/jobboardwp/

Add a modern job board to your website. Display job listings and allow employers to submit and manage jobs all from the front-end.

## Description

JobBoardWP is an easy to use and lightweight plugin that enables you to add job board functionality to your website. With a clean, modern UI, job seekers can view and search for jobs, whilst employers can submit jobs to your job board and manage their jobs from the jobs dashboard.

## FRONT-END FEATURES

The plugin adds three pages to the front-end of your website:

### Jobs page

The jobs page displays a list of jobs with keyword and location search. Job seekers can also filter jobs to show only remote jobs or certain job types/categories.

### Post Job page

The post job page is where users can submit a job via the job submission form. You can choose for jobs to appear automatically on the jobs page or require admin approval. The form enables users to add personal, job and company details. Users can save their form as a draft and preview the job before submitting the job.

### Jobs Dashboard page

The jobs dashboard page is where users manage their submitted jobs. The shortcode on the page outputs a list of jobs a user has submitted. The user can see the status of their jobs, when they expire and manage their jobs. Actions users can take on their job dashboard include: deleting jobs, editing jobs, continuing job submission, marking a job as filled and re-submitting a job.

## ADMIN FEATURES

The plugin makes it easy for you to manage your job board from the wp-admin.

### Jobs

As the admin you can see a list of all jobs and filter by status (published, pending, expired etc). You can view, edit and approve jobs from the wp-admin jobs list.

### Add New

You can also create your own new jobs directly from the wp-admin.

### Job Types

Job types allow users to select the type of job they are listing when they submit a job. The plugin comes with 7 built in job types (Freelance, Full-time, Graduate, Internship, Part-time, Temporary, Voulnteer) and each tag is assigned a default tag color (tag colors can be changed easily). You can delete, add and edit the job types.

### Job Categories

You can create custom categories for jobs in the wp-admin and allow users to select a category for their job submission when submitting a job.

### Settings

The plugin provides various settings so you can customize how your job board looks and functions. You can also enable/disable emails and change email text.

## GOOGLE STRUCTURED DATA

The plugin has been built to work with Google search by adding structured data to job listings. This allows job listings to appear in Google job search results.

## Documentation & Support

Got a problem or need help with JobBoardWP? Head over to our [documentation](http://docs.jobboardwp.com/) and perform a search of the knowledge base. If you can’t find a solution to your issue then you can create a topic on the [support forum](https://wordpress.org/support/plugin/jobboardwp/).

Are you a developer and need help finding the right hooks or functions? You can visit the [developer documentation](https://ultimatemember.github.io/jobboardwp/) page.

## Frequently Asked Questions

= Where can I find JobBoardWP documentation and user guides? =

For help setting up and configuring JobBoardWP please refer to our [documentation](http://docs.jobboardwp.com/)

= Where can I get support or talk to other users? =

If you get stuck, you can ask for help in the [JobBoardWP Support Forum](https://wordpress.org/support/plugin/jobboardwp).

= Will JobBoardWP work with my theme? =

Yes! JobBoardWP will work with any theme, but may require some styling or making [custom templates](https://docs.jobboardwp.com/article/1570-templates-structure).

= Will JobBoardWP work with WordPress Multisite installation? =

Yes! JobBoardWP is WordPress Multisite compatible.

## Installation

1. Activate the plugin
2. That's it. Go to Job Board > Settings to customize plugin options
3. For more details, please visit the official [Documentation](http://docs.jobboardwp.com/) page.

## Screenshots

1. Screenshot 1
2. Screenshot 2
3. Screenshot 3
4. Screenshot 4
5. Screenshot 5
6. Screenshot 6
7. Screenshot 7
8. Screenshot 8
9. Screenshot 9
10. Screenshot 10

## Changelog

### 1.1.2: January xx, 2022 

* Tweak: Renamed `readme.txt` to `README.md` and converted headings to markdown to follow GitHub convention, so GitHub shows README info directly on the main repo page.

### 1.1.1: December xx, 2021

* Added: [Documentation](https://ultimatemember.github.io/jobboardwp/) for developers
* Added: Integration with multilingual plugins (WPML, Polylang, TranslatePress, Weglot)
  - Predefined pages integration
  - Templates integration
* Added: Displaying job category on the individual job page adn on the jobs list
* Added: Ability to set individual job expired date when posting
* Added: Validation for the Job Data metabox fields on the add/edit job screen in Admin Dashboard
* Fixed: Hide filled and expired jobs on WordPress native archive pages. It's based on the Admin Dashboard > JobBoardWP > Settings > Jobs List settings
* Fixed: Changed the placeholder {trash_job_url} to {edit_job_url}. There isn't possible to generate the proper trash link in the email
* Fixed: Job location links based on Onsite/Remote/Onsite or Remote job meta
* Fixed: Categories dropdown and displaying child categories in the dropdown
* Fixed: Displaying posts/pages when link attached in the Job Description field on the posting form
* Fixed: Issue with category attribute in the jobs list shortcode
* Fixed: Dropdown.js library and
* Templates required update:
  - dashboard/jobs.php
  - emails/base_wrapper.php
  - emails/job_edited.php
  - emails/job_submitted.php
  - job/breadcrumbs.php
  - job/footer.php
  - job/info.php
  - jobs/search-bar.php
  - jobs/wrapper.php
  - js/jobs-dashboard.php
  - js/jobs-list.php
  - job-categories.php
  - job-submission.php

### 1.1.0: November 11, 2021

* Added: Breadcrumbs on the job page and option for disable them
* Added: Option for disabling Google structured data
* Added: Expiration reminder email notification to the job's author
* Added: Reject the ability to use a simple password in Job Post form (Your Details section when register the user)
* Fixed: Security vulnerabilities related to not sanitized/escaped data
* Fixed: Delete settings on uninstall and Uninstall process
* Fixed: Job Type and Job Category dropdowns on Job Post form
* Fixed: Job Type and Job Category dropdowns on wp-admin Add New/Edit Job post screen (Job Data metabox)
* Fixed: Application contact placeholders and validation handlers on the Job Post form
* Fixed: [jb_jobs employer-id="{userID}"] shortcode attribute
* Tweak: Implemented PHPCS + WPCS for getting better code experience

### 1.0.7: October 4, 2021

* Added: [jb_job_categories_list] shortcode for displaying all available Job Categories
* Added: Ability for job post date be translatable
* Fixed: Calculating job categories or tags when they are disabled
* Fixed: Jobs category pages visibility
* Fixed: Jobs taxonomies' permalinks

### 1.0.6: June 14, 2021

* Added: hide-filled="0||1" hide-expired="0||1" filled-only="0||1" attributes for the [jb_jobs] shortcode
* Added: orderby="title||date" order="ASC||DESC" attributes for the [jb_jobs] shortcode
* Added: `jb_get_jobs_query_args` hook for 3rd-party integrations to jobs query attributes array
* Fixed: Responsive JS scripts for some themes and screen width

* Templates required update:
  - jobs/wrapper.php

### 1.0.5: May 4, 2021

* Added: 'jb-job-company-data' hook for 3rd-party integrations to company data array
* Fixed: job type dropdown pre-defined value

### 1.0.4: March 10, 2021

* Added: Ability to get jobs feed
* Fixed: Jobs list pagination via shortcode attribute `per-page="{number}"`
* Fixed: `preview` to `jb-preview` argument in $_GET attribute to avoid the conflicts
* Fixed: Expiration date saving with localized date

### 1.0.3: December 23, 2020

* Fixed: Job description formatting
* Fixed: The issue with posting job from Guest
* Fixed: Displaying jobs list with hidden filled jobs
* Tweak: Removed tipsy.js as unused

### 1.0.2: November 3, 2020

* Added: Job Category attribute for the jobs shortcode
* Added: Job Type attribute for the jobs shortcode
* Fixed: Multisite support (Job logos)
* Fixed: Custom Job template parsing
* Fixed: Location field JS
* Fixed: Empty "Expired Date" data issues
* Fixed: "Sign In" typo and wp-login redirect on click
* Fixed: WP-Admin settings structure
* Tweak: Updated conditional logic for wp-admin settings (made the dependency from more than 1 field)

### 1.0.1: August 12, 2020

* Added: Hooks for the integration with [Ultimate Member](https://wordpress.org/plugins/ultimate-member) and [Ultimate Member - JobBoardWP integration](https://wordpress.org/plugins/um-jobboardwp) plugins

### 1.0.0: July 21, 2020

* Initial Release
