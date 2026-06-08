
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <?php include 'data.php'; ?>
</head>
<body>
    <!-- Case Studies Section -->
<section class="section realResultSec"> 
    <!-- Start of the section with the class 'realResultSec' to style this specific section -->

    <div class="container">
        <!-- Container to wrap the content for proper alignment and spacing -->

        <div class="custom-row justify-content-center text-center">
            <!-- Row with custom styling to center the content and make it text-center -->

            <div class="col_12 col_xl_7">
                <!-- Column that spans full width (col_12) on smaller screens and 7 columns on extra-large screens (col_xl_7) -->

                <div class="genericHead centerHead">
                    <!-- A wrapper div for the heading section -->

                    <h6 class="genericHead__subTitle animate fadein-Up" data-delay="0.2s">
                        <!-- Subheading with animation applied (fadein-Up) that will appear with a delay of 0.2 seconds -->
                        <?= htmlspecialchars($data['case_studies']['subtitle']) ?>
                        <!-- PHP code to output the subtitle safely by escaping any special characters -->
                    </h6>
                </div>

                <div class="headingWrapper">
                    <!-- Wrapper for the main heading -->

                    <h3 class="title animate fadein-Up" data-delay="0.3s">
                        <!-- Main heading with animation (fadein-Up) that will appear with a delay of 0.3 seconds -->
                        <?= htmlspecialchars($data['case_studies']['title']) ?>
                        <!-- PHP code to output the title safely by escaping any special characters -->
                    </h3>
                </div>
            </div>

        </div>

        <div class="custom-row realResultRow">
            <!-- Row that contains the actual case study projects -->

            <?php foreach ($data['case_studies']['projects'] as $i => $project): ?>
                <!-- Loop through each project inside the 'projects' array -->

                <div class="col_12 col_md_6 col_xl_4 animate fadein-Up" data-delay="0.<?= $i + 2 ?>s">
                    <!-- Column that adapts based on screen size (col_12 for full-width, col_md_6 for medium screens, and col_xl_4 for extra-large screens) -->
                    <!-- Each project will fade in with a delay that increases with each project (0.2s, 0.3s, etc.) -->

                    <div class="realResultCardWrapper">
                        <!-- Wrapper for each individual project card -->

                        <div class="realResultCard">
                            <!-- Project card -->

                            <div class="topWrapper">
                                <!-- Top section of the card (contains image and description) -->

                                <div class="img-wrapper">
                                    <!-- Wrapper for the image of the project -->

                                    <img src="<?= htmlspecialchars($project['image']) ?>" alt="img">
                                    <!-- Output the image URL dynamically from the project data and ensure it's safe by escaping -->
                                </div>

                                <div class="description">
                                    <!-- Description section -->

                                    <p><?= htmlspecialchars($project['description']) ?></p>
                                    <!-- Output the description of the project dynamically and safely -->
                                </div>

                            </div>

                            <div class="content">
                                <!-- Content section of the card -->

                                <h4 class="h4 fw-400"><?= htmlspecialchars($project['client']) ?></h4>
                                <!-- Project's client name displayed in a bold h4 element -->

                                <p><?= htmlspecialchars($project['result']) ?></p>
                                <!-- Output the result/impact of the project dynamically and safely -->
                            </div>

                            <div class="buttonWrapper">
                                <!-- Button wrapper for the link to view the full case study -->

                                <a href="<?= htmlspecialchars($project['link']) ?>"> View Case Study </a>
                                <!-- Output the link to the full case study dynamically -->
                            </div>
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>
            <!-- End of the foreach loop for all projects -->

            <div class="col_12">
                <!-- Full-width column for the "See more" button -->

                <div class="seeMoreBtn animate fadein-Up" data-delay="0.2s">
                    <!-- "See More" button with animation (fadein-Up) and a 0.2s delay -->

                    <a href="<?= htmlspecialchars($data['case_studies']['see_more_link']) ?>"> See more Projects </a>
                    <!-- Output the link to see more projects dynamically -->
                </div>

            </div>

        </div>

    </div>

</section>
<!-- End of the Case Studies section -->
<script src="app.js"></script>
</body>
</html>