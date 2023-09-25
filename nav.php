
    <nav>
        <ul>
            <li>

                <a class="<?php
                    if ($pathParts['filename'] == "index"){
                        print 'active';
                    }
                    ?>" href="index.php">Home
                    </a>
            </li>

            <li>
                <a class="<?php
                    if ($pathParts['filename'] == "releases"){
                        print 'active';
                    }
                    ?>" href="releases.php">Releases
                    </a>
            <li>
                <a class="<?php
                    if ($pathParts['filename'] == "about"){
                        print 'active';
                    }
                    ?>" href="about.php">About
                    </a>
            

            <li>
            </li>
        </ul>
    </nav>