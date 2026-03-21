<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Alerts</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Alerts</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="card-title">How to report identity theft or hacking?</div>
                            <div class="card-category">The document outlines a structured reporting system involving several specialized government branches. Reporting is categorized by the nature of the incident:</div>
                        </div>
                        <div class="card-body">
                            <h4 class="text-primary mt-3">For Personal Data Breaches (Identity Theft)</h4>
                            <p><strong>National Privacy Commission (NPC)</strong></p>
                            <ul>
                                <li><strong>The 72-Hour Rule:</strong> Under the Data Privacy Act (RA 10173), organizations must notify the NPC within 72 hours of discovering a breach that involves sensitive personal information.</li>
                                <li>Reports are filed through the Data Breach Notification Management System (DBNMS).</li>
                                <li>You can reach the NPC via email at <a href="mailto:complaints@privacy.gov.ph">complaints@privacy.gov.ph</a> or by phone at <strong>(02) 8234-2228</strong>.</li>
                            </ul>

                            <hr />

                            <h4 class="text-primary mt-4">For Technical Hacking & Cybercrime Investigation</h4>
                            <p><strong>NBI Cybercrime Division & DOJ Cybercrime Task Force</strong></p>
                            <ul>
                                <li>The NBI handles the actual "digital forensic" investigation to track the hackers, while the DOJ acts as the prosecution arm to file criminal cases against offenders.</li>
                                <li>You can reach out to the DOJ Cybercrime Office at <a href="mailto:cybercrime@doj.gov.ph">cybercrime@doj.gov.ph</a> or <strong>(02) 8524-8216</strong>.</li>
                            </ul>

                            <hr />

                            <h4 class="text-primary mt-4">For Immediate Technical Assistance</h4>
                            <p><strong>DICT (Department of Information and Communications Technology)</strong></p>
                            <ul>
                                <li>The DICT oversees the National Cybersecurity Plan and provides the overarching framework for protecting the country's critical infrastructures from hacking.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Guidance on detecting fake websites or investment scams?</div>
                            <div class="card-category">While the document identifies "detecting scams" as a mandatory educational requirement for the Alerts Pages, it provides specific data points to help users understand the landscape of these threats.</div>
                        </div>
                        <div class="card-body">
                            <h4 class="text-info mt-3">Common Scam Statistics (2025 Data)</h4>
                            <ul>
                                <li><strong>Online Selling Scams:</strong> These are the most prevalent, with 1,525 cases recorded. These often involve fake websites posing as legitimate retailers.</li>
                                <li><strong>Investment Scams:</strong> The document notes 291 recorded cases. These typically involve high-yield "get rich quick" schemes or unregulated platforms.</li>
                                <li><strong>Credential/Link Scams:</strong> 208 cases recorded, often used to lure people to fake websites to steal credentials.</li>
                            </ul>

                            <hr />

                            <h4 class="text-info mt-4">Key Detection Principles (Based on Regulatory Mandates)</h4>
                            <ul>
                                <li>The document emphasizes that legitimate government and financial platforms must display official logos (such as the NPC "Seal of Registration" or the DICT logo).</li>
                                <li>Under the Right to be Informed, any legitimate website must have a clear "Privacy Notice" explaining how they process your data. If a website asks for sensitive info without this, it is likely a scam.</li>
                                <li>The document specifies that the "Alerts" tab on the National ICT Governance website must be checked for updated lists of known fake websites or trending investment scams.</li>
                            </ul>

                            <hr />

                            <h4 class="text-info mt-4">Agency Oversight</h4>
                            <p>The Cybercrime Investigation and Coordinating Center (CICC) is the primary body tasked with coordinating with the DICT to release these public advisories and "guidance" documents to the public.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>