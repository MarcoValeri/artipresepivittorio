<?php

namespace App\Controller;

use App\Repository\StatuaRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StatueController extends AbstractController
{
    #[Route('/statua/{slug}', name: 'app_statua')]
    public function statua(StatuaRepository $statuaRepository, string $slug)
    {
        $statua = $statuaRepository->findOneBy(['url' => $slug]);

        if ($statua) {
            return $this->render('statues/statua.html.twig', [
                'statua'    => $statua,
                'slug'      => $slug
            ]);
        } else {
            // TODO: redirect to 404 page when is ready
            return $this->redirectToRoute('app_home');
        }
    }

    #[Route('/statue/pagina_{pageNumber}', name: 'app_statue')]
    public function statueArchivio(ManagerRegistry $doctrine, string $pageNumber)
    {
        $fromStatuaNumber = $pageNumber * 10;
        $sqlQuery = "
            SELECT
                statua.nome,
                statua.url,
                statua.descrizione,
                statua.materiali,
                statua.quantita,
                statua.prezzo,
                statua.spedizione,
                image.file
            FROM
                statua
            INNER JOIN
                statua_image ON statua.id = statua_image.statua_id
            INNER JOIN
                image ON statua_image.image_id = image.id
            GROUP BY statua.nome
            LIMIT {$fromStatuaNumber}, 10
        ";

        $conn = $doctrine->getConnection();
        $stmt = $conn->prepare($sqlQuery);
        $result = $stmt->executeQuery();
        $statues = $result->fetchAllAssociative();

        if (count($statues) > 0) {
            return $this->render('statues/statues.html.twig', [
                'statues'       => $statues,
                'pageNumber'    => $pageNumber
            ]);
        } else {
            // TODO: redirect to 404 page when is ready
            return $this->redirectToRoute('app_home');
        }
    }
}