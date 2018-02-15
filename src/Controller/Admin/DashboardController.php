<?php

declare(strict_types=1);

namespace KejawenLab\Application\SemartHris\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Syahril Hermana <syahril.hermana@gmail.com>
 */
class DashboardController extends AdminController
{
    /**
     * @Route("/dashboard", name="dashboard", options={"expose"=true})
     *
     * @return Response
     */
    public function showDashboard()
    {
        $authUtils = $this->container->get('security.authentication_utils');

        $data = [
            'page_title' => 'Dashboard'
        ];

        return $this->render('app/dashboard/dashboard.html.twig', $data);
    }
}
